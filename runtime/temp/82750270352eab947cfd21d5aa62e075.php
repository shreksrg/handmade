<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"/var/webstars/handmade/public/../application/admin/view/ldcms/document/index.html";i:1729574477;s:65:"/var/webstars/handmade/application/admin/view/layout/default.html";i:1725591948;s:62:"/var/webstars/handmade/application/admin/view/common/meta.html";i:1725591948;s:64:"/var/webstars/handmade/application/admin/view/common/script.html";i:1725591948;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta name="referrer" content="never">
<meta name="robots" content="noindex, nofollow">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<?php if(\think\Config::get('fastadmin.adminskin')): ?>
<link href="/assets/css/skins/<?php echo \think\Config::get('fastadmin.adminskin'); ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
<?php endif; ?>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config ?? ''); ?>
    };
</script>

    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav') && \think\Config::get('fastadmin.breadcrumb')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <?php if($auth->check('dashboard')): ?>
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                    <?php endif; ?>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <?php echo build_heading(null,FALSE); ?>
        <ul class="nav nav-tabs" >
            <?php foreach($models as $k=>$vo): ?>
            <li class="<?php echo $mid==$k?'active':''; ?>"> <a href="<?php echo url('/ldcms/document/index/mid/'.$k); ?>" class="addtabsit" data-value="<?php echo $k; ?>"><?php echo $vo['name']; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <div class="ldcmslang"></div>
    </div>

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
                <div class="widget-body no-padding">
                    <div id="toolbar" class="toolbar">
                        <a href="javascript:;" class="btn btn-primary btn-refresh" title="<?php echo __('Refresh'); ?>" ><i class="fa fa-refresh"></i> </a>
                        <?php if($mid!=1): ?><a href="javascript:;"
                            class="btn btn-success btn-add <?php echo $auth->check('ldcms/document/add')?'':'hide'; ?>"
                            data-params="mid=<?php echo $mid; ?>"
                            title="<?php echo __('Add'); ?>" ><i class="fa fa-plus"></i> <?php echo __('Add'); ?></a><?php endif; ?>
                        <a href="javascript:;"
                            class="btn btn-success btn-edit btn-disabled disabled <?php echo $auth->check('ldcms/document/edit')?'':'hide'; ?>" data-params="mid=<?php echo $mid; ?>" title="<?php echo __('Edit'); ?>" ><i class="fa fa-pencil"></i> <?php echo __('Edit'); ?></a>
                        <?php if($mid!=1): ?>
                        <a href="javascript:;" class="btn btn-danger btn-del btn-disabled disabled <?php echo $auth->check('ldcms/document/del')?'':'hide'; ?>" title="<?php echo __('Delete'); ?>" ><i class="fa fa-trash"></i> <?php echo __('Delete'); ?></a>
                        <a class="btn btn-info btn-move dropdown-toggle btn-disabled disabled"><i class="fa fa-arrow-right"></i> <?php echo __('Move'); ?></a>
                        <a class="btn btn-info btn-copyselected btn-disabled disabled" data-params="mid=<?php echo $mid; ?>" href="javascript:;"><i
                            class="fa fa-copy"></i> <?php echo __('Copy'); ?></a>

                        <div class="dropdown btn-group <?php echo $auth->check('ldcms/document/multi')?'':'hide'; ?>">
                            <a class="btn btn-primary btn-more dropdown-toggle btn-disabled disabled" data-toggle="dropdown"><i class="fa fa-cog"></i> <?php echo __('More'); ?></a>
                            <ul class="dropdown-menu text-left" role="menu">
                                <li><a class="btn btn-link btn-multi btn-disabled disabled" href="javascript:;" data-params="status=1"><i class="fa fa-eye"></i> <?php echo __('Set to normal'); ?></a></li>
                                <li><a class="btn btn-link btn-multi btn-disabled disabled" href="javascript:;" data-params="status=0"><i class="fa fa-eye-slash"></i> <?php echo __('Set to hidden'); ?></a></li>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <a class="btn btn-danger btn-recyclebin btn-dialog"  href="ldcms/document/recyclebin"
                            title="<?php echo __('Recycle bin'); ?>"><i class="fa fa-recycle"></i> <?php echo __('Recycle bin'); ?></a>
                        <div class="dropdown btn-group <?php echo $auth->check('ldcms/document/baidupush')?'':'hide'; ?>">
                            <a class="btn btn-warning btn-more dropdown-toggle btn-disabled disabled" data-toggle="dropdown"><i class="fa fa-random"></i> <?php echo __('Baidupush'); ?></a>
                            <ul class="dropdown-menu text-left" role="menu">
                                <li>
                                    <a class="btn btn-link btn-disabled disabled btn-baidupush <?php echo $auth->check('ldcms/document/baidupush')?'':'hide'; ?>" data-params="type=zz"   title="<?php echo __('Baidupushzz'); ?>"> <?php echo __('Baidupushzz'); ?></a>
                                </li>
                                <li>
                                    <a class="btn btn-link btn-disabled disabled btn-baidupush <?php echo $auth->check('ldcms/document/baidupush')?'':'hide'; ?>" data-params="type=ks"  title="<?php echo __('Baidupushks'); ?>"><?php echo __('Baidupushks'); ?></a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-success btn-sync_data <?php echo $auth->check('ldcms/copy_langs/document')?'':'hide'; ?>" data-params="mid=<?php echo $mid; ?>" title="<?php echo __('CopyLangs'); ?>"><i class="fa fa-copy"></i> <?php echo __('CopyLangs'); ?></a>
						<?php if($addon_config['open_translate']==1): ?>
						<a class="btn btn-primary btn-translation <?php echo $auth->check('ldcms/document/translate')?'':'hide'; ?>" data-params="mid=<?php echo $mid; ?>" title="<?php echo __('Translation'); ?>"><i class="fa fa-globe"></i> <?php echo __('Translation'); ?></a>
						<?php endif; ?>
                    </div>
                    <table id="table" class="table table-striped table-bordered table-hover table-nowrap"
                           data-operate-edit="<?php echo $auth->check('ldcms/document/edit'); ?>"
                           data-operate-del="<?php echo $auth->check('ldcms/document/del'); ?>"
                           data-params="mid=<?php echo $mid; ?>"
                           width="100%">
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<script id="categorytpl" type="text/html">
    <div class="">
        <div class="alert alert-warning-light ui-sortable-handle" style="cursor: move;">
            <b>请选择需要移动栏目</b><br>
        </div>
        <!-- /.box-body -->
        <div class="text-black">
            <div class="row">
                <div class="col-sm-12">
                    <select name="cid" class="form-control">
                        <?php foreach($categorys as $category): ?>
                        <option value="<?php echo $category['id']; ?>"><?php echo $category['icon_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</script>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version'] ?? ''); ?>"></script>
    </body>
</html>
