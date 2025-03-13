<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:108:"/var/webstars/handmade/public/../application/admin/view/../../../addons/ldcms/utils/builder/view/fields.html";i:1726194050;s:65:"/var/webstars/handmade/application/admin/view/layout/default.html";i:1725591948;s:62:"/var/webstars/handmade/application/admin/view/common/meta.html";i:1725591948;s:64:"/var/webstars/handmade/application/admin/view/common/script.html";i:1725591948;}*/ ?>
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
                                <style>
    .font-bold {
        font-weight: bold;
    }

    .font-underline {
        font-weight: bold;
    }

    .radio-inline, .checkbox-inline {
        padding-left: 0;
    }
</style>

<?php if($isForm): ?>
<form id="forms" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
    <?php if(!(empty($tab_group) || (($tab_group instanceof \think\Collection || $tab_group instanceof \think\Paginator ) && $tab_group->isEmpty()))): ?>
    <div class="panel panel-default panel-intro">
        <div class="panel-heading">
            <ul class="nav nav-tabs nav-group">
                <?php foreach($tab_group as $key=> $group): ?>
                <li class="<?php echo $key==0?'active':''; ?>"><a href="#tab<?php echo $key; ?>" data-toggle="tab"><?php echo $group; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="panel-body">
    <?php endif; endif; ?>
<!--@formatter:off-->
<?php foreach($fields as $item): ?>
<div data-type="<?php echo $item['item_group']; ?>" class="form-group item-group-tabs <?php echo (isset($item['class']) && ($item['class'] !== '')?$item['class']:''); ?>" <?php if(!(empty($item['visible']) || (($item['visible'] instanceof \think\Collection || $item['visible'] instanceof \think\Paginator ) && $item['visible']->isEmpty()))): ?> data-favisible="<?php echo $item['visible']; ?>" <?php endif; ?>>
    <div class="control-label col-xs-12 col-sm-2"><?php echo $item['title']; if($field_show&&!empty($item['title'])): ?>
        <span style="color:#999">[<?php echo $item['field']; ?>]</span> <?php endif; ?></div>
    <div class="col-xs-12 col-sm-8">
        <?php switch($item['type']): case "string": ?>
        <input <?php echo htmlentities($item['extend_html'] ?? ''); ?> type="text" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" value="<?php echo htmlentities($item['value'] ?? ''); ?>" placeholder="<?php echo (isset($item['placeholder']) && ($item['placeholder'] !== '')?$item['placeholder']:''); ?>" class="form-control" data-rule="<?php echo $item['rule']; ?>" data-tip="<?php echo $item['tip']; ?>" />
        <?php break; case "password": ?>
        <input <?php echo htmlentities($item['extend_html'] ?? ''); ?> type="password" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" value="<?php echo htmlentities($item['value'] ?? ''); ?>" placeholder="<?php echo (isset($item['placeholder']) && ($item['placeholder'] !== '')?$item['placeholder']:''); ?>" class="form-control" data-rule="<?php echo $item['rule']; ?>" data-tip="<?php echo $item['tip']; ?>" />
        <?php break; case "text": case "editor": ?>
        <textarea <?php echo htmlentities($item['extend_html'] ?? ''); ?> name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" placeholder="<?php echo (isset($item['placeholder']) && ($item['placeholder'] !== '')?$item['placeholder']:''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>"
            class="form-control <?php if($item['type'] == 'editor'): ?>editor<?php endif; ?>" data-rule="<?php echo $item['rule']; ?>" rows="5" data-tip="<?php echo $item['tip']; ?>"><?php echo htmlentities($item['value'] ?? ''); ?></textarea>
        <?php break; case "array": if($item['field']=='downloadurl'): $item['value']=isset($values[$item['field']])?$item['value']:$item['download_list']; ?>
            <dl <?php echo htmlentities($item['extend_html'] ?? ''); ?> class="fieldlist downloadlist" data-name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" data-template="downloadurltpl">
                <dd>
                    <ins style="width:70px;">来源</ins>
                    <ins style="width:250px;">地址</ins>
                    <ins>密码(可为空)</ins>
                </dd>
                <dd><a href="javascript:;" class="btn btn-sm btn-success btn-append"><i class="fa fa-plus"></i> <?php echo __('Append'); ?></a></dd>
                <textarea name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" class="form-control hide" cols="30" rows="5"><?php echo htmlentities($item['value'] ?? ''); ?></textarea>
            </dl>
        <?php else: $arrList=empty($item['value']) ? '' : json_decode($item['value'],true); ?>
            <dl <?php echo htmlentities($item['extend_html'] ?? ''); ?> class="fieldlist" data-name="<?php echo htmlentities($item['field_name'] ?? ''); ?>">
                <dd>
                    <ins><?php echo isset($item["setting"]["key"])&&$item["setting"]["key"]?$item["setting"]["key"]:__('Array key'); ?></ins>
                    <ins><?php echo isset($item["setting"]["value"])&&$item["setting"]["value"]?$item["setting"]["value"]:__('Array value'); ?></ins>
                </dd>

                <dd><a href="javascript:;" class="append btn btn-sm btn-success"><i class="fa fa-plus"></i> <?php echo __('Append'); ?></a></dd>
                <textarea name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" class="form-control hide" cols="30" rows="5"><?php if(!empty($arrList)): ?><?php echo htmlentities(json_encode($arrList,JSON_UNESCAPED_UNICODE) ?? ''); endif; ?></textarea>
            </dl>
        <?php endif; break; case "date": ?>
        <input <?php echo htmlentities($item['extend_html'] ?? ''); ?> type="text" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" value="<?php echo htmlentities($item['value'] ?? ''); ?>" class="form-control datetimepicker" data-date-format="YYYY-MM-DD" data-tip="<?php echo $item['tip']; ?>" data-rule="<?php echo $item['rule']; ?>" />
        <?php break; case "time": ?>
        <input <?php echo htmlentities($item['extend_html'] ?? ''); ?> type="text" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" value="<?php echo htmlentities($item['value'] ?? ''); ?>" class="form-control datetimepicker" data-date-format="HH:mm:ss" data-tip="<?php echo $item['tip']; ?>" data-rule="<?php echo $item['rule']; ?>" />
        <?php break; case "datetime": ?>
        <input <?php echo htmlentities($item['extend_html'] ?? ''); ?> type="text" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" value="<?php echo htmlentities($item['value'] ?? ''); ?>" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-tip="<?php echo $item['tip']; ?>" data-rule="<?php echo $item['rule']; ?>" />
        <?php break; case "datetimerange": ?>
        <input <?php echo htmlentities($item['extend_html'] ?? ''); ?> type="text" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" value="<?php echo htmlentities($item['value'] ?? ''); ?>" class="form-control datetimerange" data-tip="<?php echo $item['tip']; ?>" data-rule="<?php echo $item['rule']; ?>"/>
        <?php break; case "number": ?>
        <input <?php echo htmlentities($item['extend_html'] ?? ''); ?> type="number" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>"
            value="<?php echo htmlentities($item['value'] ?? ''); ?>" placeholder="<?php echo (isset($item['placeholder']) && ($item['placeholder'] !== '')?$item['placeholder']:''); ?>" class="form-control" data-tip="<?php echo $item['tip']; ?>" data-rule="<?php echo $item['rule']; ?>" />
        <?php break; case "checkbox": $content_list=isset($item['content_list_arr'])? $item['content_list_arr']:$item['content_list']; if(is_array($content_list) || $content_list instanceof \think\Collection || $content_list instanceof \think\Paginator): if( count($content_list)==0 ) : echo "" ;else: foreach($content_list as $key=>$vo): ?>
            <div class="checkbox checkbox-inline">
                <label for="<?php echo htmlentities($item['field_name'] ?? ''); ?>[]-<?php echo $key; ?>"><input id="<?php echo htmlentities($item['field_name'] ?? ''); ?>[]-<?php echo $key; ?>" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>[]" type="checkbox" value="<?php echo htmlentities($key ?? ''); ?>" data-rule="<?php echo $item['rule']; ?>" data-tip="<?php echo $item['tip']; ?>" <?php if(in_array(($key), is_array($item['value'])?$item['value']:explode(',',$item['value']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <span class="msg-box n-right" for="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>"></span>
        <?php break; case "radio": $content_list=isset($item['content_list_arr'])? $item['content_list_arr']:$item['content_list']; if(is_array($content_list) || $content_list instanceof \think\Collection || $content_list instanceof \think\Paginator): if( count($content_list)==0 ) : echo "" ;else: foreach($content_list as $key=>$vo): ?>
            <div class="radio radio-inline">
                <label for="<?php echo htmlentities($item['field_name'] ?? ''); ?>-<?php echo $key; ?>"><input id="<?php echo htmlentities($item['field_name'] ?? ''); ?>-<?php echo $key; ?>" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" type="radio" value="<?php echo htmlentities($key ?? ''); ?>" data-rule="<?php echo $item['rule']; ?>" data-tip="<?php echo $item['tip']; ?>" <?php if(in_array(($key), is_array($item['value'])?$item['value']:explode(',',$item['value']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <span class="msg-box n-right" for="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>"></span>
        <?php break; case "select": case "selects": $content_list=isset($item['content_list_arr'])? $item['content_list_arr']:$item['content_list']; ?>
        <select <?php echo htmlentities($item['extend_html'] ?? ''); ?> id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" name="<?php echo htmlentities($item['field_name'] ?? ''); ?><?php echo $item['type']=='selects'?'[]':''; ?>"
            class="form-control selectpicker" title="请选择" data-rule="<?php echo $item['rule']; ?>" data-tip="<?php echo $item['tip']; ?>"
            <?php echo $item['type']=='selects'?'multiple':''; ?> data-live-search="<?php echo !empty($item['search'])?true:false; ?>"
            data-value="<?php echo $item['value']; ?>">
            <?php if(is_array($content_list) || $content_list instanceof \think\Collection || $content_list instanceof \think\Paginator): if( count($content_list)==0 ) : echo "" ;else: foreach($content_list as $key=>$vo): ?>
            <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($item['value'])?$item['value']:explode(',',$item['value']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php break; case "video": ?>
            <div class="input-group">
                <input id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" class="form-control" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" type="text" value="<?php echo htmlentities($item['value'] ?? ''); ?>" data-rule="<?php echo $item['rule']; ?>" data-tip="<?php echo $item['tip']; ?>">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-<?php echo $item['field']; ?>" class="btn btn-danger plupload" data-input-id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" data-preview-id="p-<?php echo $item['field']; ?>" data-mimetype="video/*"  ><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-<?php echo $item['field']; ?>" class="btn btn-primary fachoose" data-input-id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" data-preview-id="p-<?php echo $item['field']; ?>" data-mimetype="video/*" ><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-<?php echo $item['field']; ?>"></ul>
        <?php break; case "image": case "images": ?>
        <div class="input-group">
            <input id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" class="form-control" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" type="text" value="<?php echo htmlentities($item['value'] ?? ''); ?>" data-rule="<?php echo $item['rule']; ?>" data-tip="<?php echo $item['tip']; ?>">
            <div class="input-group-addon no-border no-padding">
                <span><button type="button" id="plupload-<?php echo $item['field']; ?>" class="btn btn-danger plupload" data-input-id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" data-preview-id="p-<?php echo $item['field']; ?>" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp,image/webp" data-multiple="<?php echo $item['type']=='image'?'false':'true'; ?>" <?php if($item['maximum']): ?>data-maxcount="<?php echo $item['maximum']; ?>" <?php endif; ?>><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                <span><button type="button" id="fachoose-<?php echo $item['field']; ?>" class="btn btn-primary fachoose" data-input-id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" data-preview-id="p-<?php echo $item['field']; ?>" data-mimetype="image/*" data-multiple="<?php echo $item['type']=='image'?'false':'true'; ?>" <?php if($item['maximum']): ?>data-maxcount="<?php echo $item['maximum']; ?>" <?php endif; ?>><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
            </div>
            <span class="msg-box n-right" for="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>"></span>
        </div>
        <ul class="row list-inline plupload-preview" id="p-<?php echo $item['field']; ?>"></ul>
        <?php break; case "file": case "files": ?>
        <div class="input-group">
            <input id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" class="form-control" name="row[<?php echo htmlentities($item['field'] ?? ''); ?>]" type="text" value="<?php echo htmlentities($item['value'] ?? ''); ?>" data-rule="<?php echo $item['rule']; ?>" data-tip="<?php echo $item['tip']; ?>">
            <div class="input-group-addon no-border no-padding">
                <span><button type="button" id="plupload-<?php echo $item['field']; ?>" class="btn btn-danger plupload" data-input-id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" data-multiple="<?php echo $item['type']=='file'?'false':'true'; ?>" <?php if($item['maximum']): ?>data-maxcount="<?php echo $item['maximum']; ?>" <?php endif; ?>><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                <span><button type="button" id="fachoose-<?php echo $item['field']; ?>" class="btn btn-primary fachoose" data-input-id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" data-multiple="<?php echo $item['type']=='file'?'false':'true'; ?>" <?php if($item['maximum']): ?>data-maxcount="<?php echo $item['maximum']; ?>" <?php endif; ?>><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
            </div>
            <span class="msg-box n-right" for="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>"></span>
        </div>
        <?php break; case "switch": ?>
        <input id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" type="hidden" value="<?php echo $item['value']?1:0; ?>">
        <a href="javascript:;" data-toggle="switcher" class="btn-switcher" data-input-id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" data-yes="1" data-no="0">
            <i class="fa fa-toggle-on text-success <?php if(!$item['value']): ?>fa-flip-horizontal text-gray<?php endif; ?> fa-2x"></i>
        </a>
        <?php break; case "bool": ?>
        <label for="<?php echo htmlentities($item['field_name'] ?? ''); ?>-yes"><input id="<?php echo htmlentities($item['field_name'] ?? ''); ?>-yes" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" type="radio" value="1" <?php echo !empty($item['value'])?'checked':''; ?> data-tip="<?php echo $item['tip']; ?>" /> <?php echo __('Yes'); ?></label>
        <label for="<?php echo htmlentities($item['field_name'] ?? ''); ?>-no"><input id="<?php echo htmlentities($item['field_name'] ?? ''); ?>-no" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" type="radio" value="0" <?php echo !empty($item['value'])?'':'checked'; ?> data-tip="<?php echo $item['tip']; ?>" /> <?php echo __('No'); ?></label>
        <?php break; case "city": ?>
        <div style="position:relative">
        <input <?php echo htmlentities($item['extend_html'] ?? ''); ?> type="text" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" value="<?php echo htmlentities($item['value'] ?? ''); ?>" class="form-control" data-toggle="city-picker" data-tip="<?php echo $item['tip']; ?>" data-rule="<?php echo $item['rule']; ?>" />
        </div>
        <?php break; case "tags": ?>
        <input id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>" data-rule="" class="form-control" placeholder="输入后空格确认"name="<?php echo htmlentities($item['field_name'] ?? ''); ?>"  type="text" value="<?php echo htmlentities($item['value'] ?? ''); ?>">
        <?php break; case "selectpage": case "selectpages":  $content_list=empty($item['content_list'])?url('ldcms/fields/selectpage').'?id='.$item['id'].'&admin=1':$item['content_list'];  ?>
        <input <?php echo htmlentities($item['extend_html'] ?? ''); ?> type="text" name="<?php echo htmlentities($item['field_name'] ?? ''); ?>" id="c-<?php echo htmlentities($item['item_id'] ?? ''); ?>"
            value="<?php echo htmlentities($item['value'] ?? ''); ?>" class="form-control selectpage" data-source='<?php echo $content_list; ?>'
            placeholder="<?php echo (isset($item['placeholder']) && ($item['placeholder'] !== '')?$item['placeholder']:''); ?>"
            data-pagination="<?php echo (isset($item['pagination']) && ($item['pagination'] !== '')?$item['pagination']:true); ?>" 	data-select-only="<?php echo (isset($item['select_only']) && ($item['select_only'] !== '')?$item['select_only']:false); ?>"
            data-primary-key="<?php echo $item['setting']['primarykey']; ?>" data-field="<?php echo $item['setting']['field']; ?>" data-multiple="<?php echo $item['type']=='selectpage'?'false':'true'; ?>" data-tip="<?php echo $item['tip']; ?>" data-rule="<?php echo $item['rule']; ?>" />
        <?php break; case "custom": ?>
        <?php echo $item['extend_html']; break; endswitch; if($item['tip']): ?>
		<p style="padding:5px 12px;margin-top:5px;background: #f2f2f2;font-size: 13px;color: #666;"><?php echo $item['tip']; ?></p>
		<?php endif; ?>
    </div>
</div>
<?php endforeach; ?>
<!--@formatter:on-->

<script type="text/html" id="downloadurltpl">
    <dd class="form-inline">
        <input type="text" name="<%=name%>[<%=index%>][name]" class="form-control" value="<%=row.name%>" style="width:70px;"/>
        <input type="text" name="<%=name%>[<%=index%>][url]" id="c-downloadurl-<%=index%>" class="form-control" value="<%=row.url%>" style="width:170px;"/>
        <div class="btn-group">
            <button type="button" id="plupload-downloadurl-<%=index%>" class="btn btn-danger plupload" data-input-id="c-downloadurl-<%=index%>" data-mimetype="*" data-multiple="false"><i class="fa fa-upload"></i></button>
            <button type="button" id="fachoose-downloadurl-<%=index%>" class="btn btn-primary fachoose" data-input-id="c-downloadurl-<%=index%>" data-mimetype="*" data-multiple="false"><i class="fa fa-list"></i></button>
        </div>
        <input type="text" name="<%=name%>[<%=index%>][password]" class="form-control" value="<%=row.password%>" style="width:70px;"/>
        <span class="btn btn-sm btn-danger btn-remove"><i class="fa fa-times"></i></span> <span class="btn btn-sm btn-primary btn-dragsort"><i class="fa fa-arrows"></i></span>
    </dd>
</script>


<?php if($isForm): ?>
            <div class="form-group layer-footer">
                <label class="control-label col-xs-12 col-sm-2"></label>
                <div class="col-xs-12 col-sm-8">
                    <button type="submit" class="btn btn-primary btn-embossed disabled"><?php echo __('OK'); ?></button>
                    <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                </div>
            </div>
    <?php if(!(empty($tab_group) || (($tab_group instanceof \think\Collection || $tab_group instanceof \think\Paginator ) && $tab_group->isEmpty()))): ?>
        </div>
    </div>
    <?php endif; ?>
</form>

<script>
    require.callback=function (){
        require(['jquery'], function ($, Form) {
            $(".item-group-tabs[data-type!='tab0']").hide();
            $(document).on("click", ".nav-group li a[data-toggle='tab']", function () {
                var type = $(this).attr("href").substring(1);
                $(".item-group-tabs[data-type!='" + type + "']").hide();
                $(".item-group-tabs[data-type='" + type + "']").show();
            });
        });
    }
</script>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version'] ?? ''); ?>"></script>
    </body>
</html>
