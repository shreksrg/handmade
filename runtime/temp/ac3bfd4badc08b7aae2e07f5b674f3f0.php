<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:65:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/list_news.html";i:1708909890;s:62:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/common.html";i:1716869348;s:60:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/head.html";i:1726207716;s:65:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/neibanner.html";i:1708573732;s:64:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/neiernav.html";i:1709276850;s:64:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/footmess.html";i:1709803868;s:60:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/foot.html";i:1721655678;s:62:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/footjs.html";i:1709304090;}*/ ?>
<!DOCTYPE html>
<html lang="en">

  <head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $ld['sitetitle']; ?></title>
    <meta name="keywords" content="<?php echo $ld['seo_keywords']; ?>" />
    <meta name="description" content="<?php echo $ld['seo_description']; ?>" />
    <link rel="stylesheet" href="/assets/addons/ldcms/ldcms2024/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/addons/ldcms/ldcms2024/css/iconfont.css" />
    <link rel="stylesheet" href="/assets/addons/ldcms/ldcms2024/css/animate.min.css" />
    <link rel="stylesheet" href="/assets/addons/ldcms/ldcms2024/css/swiper.min.css" />
    <link rel="stylesheet" href="/assets/addons/ldcms/ldcms2024/css/public.css" />
    <link rel="stylesheet" href="/assets/addons/ldcms/ldcms2024/css/styles.css" />
    <link rel="stylesheet" href="/assets/addons/ldcms/ldcms2024/css/media.css" />

    <script src="/assets/addons/ldcms/ldcms2024/js/jquery-1.11.2.min.js"></script>
    <script src="/assets/addons/ldcms/ldcms2024/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="/assets/addons/ldcms/ldcms2024/layer/layer.js"></script>
    <script src="/assets/addons/ldcms/ldcms2024/js/swiper.min.js"></script>
    <script src="/assets/addons/ldcms/ldcms2024/js/scrolla.jquery.js"></script>
    <script src="/assets/addons/ldcms/ldcms2024/js/jquery.stellar.min.js"></script>
    <script src="/assets/addons/ldcms/ldcms2024/js/qrcode.js"></script>

    <!--[if IE 8]>
    <script type="text/javascript" src="/assets/addons/ldcms/ldcms2024/js/jquery-1.9.1.min.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    <!-- top -->
     <div class="top hidden-xs">
      <div class="topitem ">
        <div class="con1400">
          <div class="head flexrow">
            <div class="logo">
              <a class="flexrow" href="<?php echo addon_url('ldcms/index/index'); ?>">
                <img src="<?php echo cdnurl($ld['logo1'] ?? ''); ?>" alt="<?php echo $ld['compony']; ?>">
              </a>
            </div>
            <div class="head_r flexrow">
              <div class="nav">
                <ul class="flexrow">
                  <li class="<?php if($topid==$item['id']): ?> active <?php endif; ?>">
                    <a href="<?php echo addon_url('ldcms/index/index'); ?>">网站首页</a>
                  </li>
                  <?php $__7RDT1czIwv__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"");if(is_array($__7RDT1czIwv__) || $__7RDT1czIwv__ instanceof \think\Collection || $__7RDT1czIwv__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__7RDT1czIwv__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;$item["image"]=cdnurl($item["image"],true);$item["big_image"]=cdnurl($item["big_image"],true);?>
                  <li class="<?php if($topid==$item['id']): ?> active <?php endif; ?>">
                    <a href="<?php echo $item['url']; ?>" title="<?php echo $item['name']; ?>"><?php echo $item['name']; ?></a>
                    <?php if($item['child']>0): ?>
                    <div class="ernav">
                      <div class="con1400">
                        <div class="ernavitem flexrow">
                          <div class="ernav_l">
                            <h3>
                              <?php echo $item['ename']; ?><i>/</i><span><?php echo $item['name']; ?></span>
                            </h3>
                            <p><?php echo $item['des1']; ?></p>
                            <ul class="ernavlink flexrow">
                              <?php $__lpOsYIGtc9__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"");if(is_array($__lpOsYIGtc9__) || $__lpOsYIGtc9__ instanceof \think\Collection || $__lpOsYIGtc9__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__lpOsYIGtc9__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav2): $mod = ($i % 2 );++$i;$nav2["image"]=cdnurl($nav2["image"],true);$nav2["big_image"]=cdnurl($nav2["big_image"],true);?>
                              <li>
                                <a href="<?php echo $nav2['url']; ?>"
                                  title="<?php echo $nav2['name']; ?>"><?php echo $nav2['name']; ?></a>
                              </li>
                              <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                          </div>
                          <div class="ernav_r">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                            <p><?php echo $item['des2']; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endif; ?>
                  </li>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              </div>
              <div class="top_r flexrow">
                <div class="top_lang flexrow">
                  <img src="/assets/addons/ldcms/ldcms2024/images/langico.png" alt="语言切换">
                  <div class="langitem">
                    <?php foreach($ld['langsurl'] as $key=>$item): ?>
                    <a class="flexrow"
                      href="<?php echo $item['url']; ?>">
                      <img src="/assets/addons/ldcms/ldcms2024/images/<?php echo $key; ?>.png" alt="<?php echo $item['title']; ?>">
                      <span><?php echo $item['title']; ?></span>
                    </a>
                    <?php endforeach; ?>
                  </div>
                </div>
                <div class="top_search">
                  <img class="top_searchico" src="/assets/addons/ldcms/ldcms2024/images/searico.png"
                    alt>
                  <div class="searchitem">
                    <div class="con1400">
                      <form class="searchform flexrow" method="get"
                        action="<?php echo addon_url('ldcms/search/index'); ?>">
                        <input type="text" name="search" value="<?php echo htmlentities($search ?? ''); ?>" placeholder="请输入关键字">
                        <button type="submit">搜索</button>
                        <div class="searchclose">
                          <img src="/assets/addons/ldcms/ldcms2024/images/search_close.png" alt>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="waptop hidden-sm hidden-md hidden-lg">
      <div class="waptop_item">
        <div class="con1400">
          <div class="waptopitem flexrow">
            <div class="waptop_l">
              <a class="flexrow" href="<?php echo addon_url('ldcms/index/index'); ?>">
                <img src="<?php echo cdnurl($ld['logo1'] ?? ''); ?>" alt="<?php echo $ld['compony']; ?>">
              </a>
            </div>
            <div class="waptop_r flexrow">
              <div class="waptop_lang flexrow">
                
                <p class="waptop_langa"  >ENG</p>
                <div class="langitem">
                  <?php foreach($ld['langsurl'] as $key=>$item): ?>
                  <a class="flexrow"
                    href="<?php echo $item['url']; ?>">
                    <img src="/assets/addons/ldcms/ldcms2024/images/<?php echo $key; ?>.png" alt="<?php echo $item['title']; ?>">
                    <span><?php echo $item['title']; ?></span>
                  </a>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="waptop_rs">
                <img src="/assets/addons/ldcms/ldcms2024/images/searchico.png" alt>
              </div>
              <div class="waptop_rnav">
                <img src="/assets/addons/ldcms/ldcms2024/images/wapnavico.png" alt>
              </div>
            </div>
            <div class="wapnav">
              <div class="wapnavitem">
                <div class="con1400">
                  <div class="wapnavtop flexrow">
                    <div class="wapnavt_l">
                      <a class="flexrow"
                        href="<?php echo addon_url('ldcms/index/index'); ?>">
                        <img src="<?php echo cdnurl($ld['logo1'] ?? ''); ?>" alt="<?php echo $ld['compony']; ?>">
                      </a>
                    </div>
                    <div class="wapnavt_r">
                      <img src="/assets/addons/ldcms/ldcms2024/images/search_close.png" alt>
                    </div>
                  </div>
                  <div class="wapnavbot">
                    <ul>
                      <li>
                        <a href="<?php echo addon_url('ldcms/index/index'); ?>">网站首页</a>
                      </li>
                      <?php $__Oq3vK5HYXa__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"");if(is_array($__Oq3vK5HYXa__) || $__Oq3vK5HYXa__ instanceof \think\Collection || $__Oq3vK5HYXa__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Oq3vK5HYXa__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;$item["image"]=cdnurl($item["image"],true);$item["big_image"]=cdnurl($item["big_image"],true);?>
                      <li class="flexrow">
                        <a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
                        <?php if($item['child']>0): ?>
                        <img class="wapnav_ico"
                          src="/assets/addons/ldcms/ldcms2024/images/jiantblue.png" alt>
                        <div class="wapernav">
                          <?php $__A6PvZxHwLp__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"");if(is_array($__A6PvZxHwLp__) || $__A6PvZxHwLp__ instanceof \think\Collection || $__A6PvZxHwLp__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__A6PvZxHwLp__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav2): $mod = ($i % 2 );++$i;$nav2["image"]=cdnurl($nav2["image"],true);$nav2["big_image"]=cdnurl($nav2["big_image"],true);?>
                          <a href="<?php echo $nav2['url']; ?>"
                            title="<?php echo $nav2['name']; ?>"><?php echo $nav2['name']; ?></a>
                          <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <?php endif; ?>
                      </li>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="wapsearch">
              <div class="wapsea_item flexrow">
                <form class="flexrow" method="get"
                  action="<?php echo addon_url('ldcms/search/index'); ?>">
                  <input type="text" name="search" value="<?php echo htmlentities($search ?? ''); ?>" placeholder="请输入关键字">
                  <button type="submit">
                    <img src="/assets/addons/ldcms/ldcms2024/images/searchico.png" alt>
                  </button>
                  <div class="wapsea_close">
                    <img src="/assets/addons/ldcms/ldcms2024/images/search_close.png" alt>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- top end -->

    <!-- banner -->
    <div class="banner">
        <?php $__5NYxHFSudT__ =\addons\ldcms\model\Category::instance()->getHomeCategory($topid,0,"");$__5NYxHFSudT__=[$__5NYxHFSudT__];if(is_array($__5NYxHFSudT__) || $__5NYxHFSudT__ instanceof \think\Collection || $__5NYxHFSudT__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__5NYxHFSudT__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
      <div class="neibanner">
        <img src="<?php echo $item['big_image']; ?>" alt="<?php echo $item['name']; ?>">
        <div class="neibannerdesc flexrow">
          <h2><?php echo $item['name']; ?></h2>
        </div>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!-- banner end -->

    <!-- 内页导航 -->
    <section class="neinav">
      <div class="con1400">
        <div class="neinav_item flexrow">
          <ul class="flexrow">
            <?php $__m9xeCtpnI7__ =\addons\ldcms\model\Category::instance()->getHomeNav($topid,"");if(is_array($__m9xeCtpnI7__) || $__m9xeCtpnI7__ instanceof \think\Collection || $__m9xeCtpnI7__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__m9xeCtpnI7__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;$item["image"]=cdnurl($item["image"],true);$item["big_image"]=cdnurl($item["big_image"],true);?>
            <li class="<?php if($category['id']==$item['id']): ?> active <?php endif; ?>">
              <a href="<?php echo $item['url']; ?>" title="<?php echo $item['name']; ?>"><?php echo $item['name']; ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <div class="casetop_r">
            <p>
              <a href="<?php echo addon_url('ldcms/index/index'); ?>">首页</a>  
              <?php $__kxGmiNdq16__=\addons\ldcms\model\Category::instance()->getHomePosition($category['id']);if(is_array($__kxGmiNdq16__) || $__kxGmiNdq16__ instanceof \think\Collection || $__kxGmiNdq16__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__kxGmiNdq16__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
              >
              <a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a> 
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- 内页导航 end -->

    <!-- 主体 -->
    <section class="neimain">
      <div class="newslistp">
        <div class="con1400">
          <div class="newslistp_top animate"
          data-animate="fadeInUp" data-duration="1.5s" data-delay="0.1s">
            <!-- Swiper -->
            <div class="swiper-container newslistpswiper">
              <div class="swiper-wrapper">
                <?php $cid=0;$mid=0;$page=null;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
            if( empty($cid) && isset($category['id']) && !empty($category["id"]) ){
                $cid=$category["id"];
                is_null($page)?$page=true:'';  //如果没设置分页，那么默认开启分页
            }
            //传入cid,默认关闭分页
            if(!empty($cid)){
                is_null($page)?$page=false:''; 
            }
            //判断手机端是否开启简洁分页
            $addon_config=get_addon_config('ldcms');
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__Lz4GZCherb__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'5','ext'=>'content','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__Lz4GZCherb__) || $__Lz4GZCherb__ instanceof \think\Collection || $__Lz4GZCherb__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Lz4GZCherb__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="swiper-slide">
                  <a class="newslistp_item flexrow" href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>">
                    <div class="newslistp_l">
                      <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                    </div>
                    <div class="newslistp_r">
                      <h3><?php echo $item['title']; ?></h3>
                      <p>
                        <?php echo ld_str_cut($item['seo_description'] ?? '',120); ?>
                      </p>
                      <div class="newslistp_rbot flexrow">
                        <span><?php echo ld_fdate($item['show_time'] ?? '','Y-m-d'); ?></span>
                        <strong>阅读全文 ></strong>
                      </div>
                    </div>
                  </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__Lz4GZCherb__->render():"";$pages_total=$page&&!$simple?$__Lz4GZCherb__->total():0; ?>
              </div>
            </div>
            <!-- Add Pagination -->
            <div
              class="swiper-pagination newslistppagination banner_pag "></div>
            <!-- Initialize Swiper -->
            <script>
              var newslistpswiper = new Swiper('.newslistpswiper', {
                slidesPerView: 1,
                autoplay:true,
                spaceBetween: 30,
                loop: true,
                pagination: {
                  el: '.newslistppagination',
                  clickable: true,
                },
              });
            </script>
          </div>
          <div class="newslistp_bot container">
            <ul class="row">
              <?php $cid=0;$mid=0;$page=true;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
            if( empty($cid) && isset($category['id']) && !empty($category["id"]) ){
                $cid=$category["id"];
                is_null($page)?$page=true:'';  //如果没设置分页，那么默认开启分页
            }
            //传入cid,默认关闭分页
            if(!empty($cid)){
                is_null($page)?$page=false:''; 
            }
            //判断手机端是否开启简洁分页
            $addon_config=get_addon_config('ldcms');
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__Isfp01ADGa__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'6','ext'=>'content','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__Isfp01ADGa__) || $__Isfp01ADGa__ instanceof \think\Collection || $__Isfp01ADGa__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Isfp01ADGa__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
              <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 animate"
              data-animate="zoomIn" data-duration="1.5s" data-delay="0.<?php echo $i; ?>s">
                <a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>">
                  <div class="newslistp_botimg">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                  </div>
                  <div class="newslistp_botdes flexrow">
                    <h3><?php echo ld_str_cut($item['title'] ?? '',30); ?></h3>
                    <p>阅读全文 ></p>
                  </div>
                </a>
              </li>
              <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__Isfp01ADGa__->render():"";$pages_total=$page&&!$simple?$__Isfp01ADGa__->total():0; ?>
            </ul>
          </div>
          <div class="newspage">
            <?php echo $pages; ?> 
          </div>
        </div>
      </div>
    </section>
    <!-- 主体 end -->

    <!-- 底部表单 -->
    <section class="idx_footmess animate"
data-animate="fadeInUp" data-duration="1.5s" data-delay="0.1s">
      <div class="con1400">
        <?php $__IBuloAtjmv__ =\addons\ldcms\model\Category::instance()->getHomeCategory(162,0,"");$__IBuloAtjmv__=[$__IBuloAtjmv__];if(is_array($__IBuloAtjmv__) || $__IBuloAtjmv__ instanceof \think\Collection || $__IBuloAtjmv__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__IBuloAtjmv__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="idx_ftitles">
          <h3><?php echo $item['des1']; ?></h3>
          <p><?php echo $item['des2']; ?></p>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="idx_fmess">
          <form class="idx_fform flexrow"
            action="<?php echo addon_url('ldcms/diyform/message'); ?>" method="post">
            <input type="text" name="uname" placeholder="您的姓名">
            <input type="text" name="mobile" placeholder="您的电话">
            <input class="idx_fform3" type="text" name="remark" placeholder="您的留言">
            <?php echo token(); ?>
            <button type="submit">立即提交</button>
          </form>
        </div>
      </div>
    </section>
    <!-- 底部表单 end -->

    <!-- 底部导航 -->
     <section class="foot">
      <div class="con1400">
        <div class="foottop flexrow">
          <div class="footlogo">
            <a href="<?php echo addon_url('ldcms/index/index'); ?>">
              <img src="<?php echo cdnurl($ld['logo1'] ?? ''); ?>" alt="<?php echo $ld['compony']; ?>">
            </a>
          </div>
          <div class="footlinks">
            <ul class="flexrow">
              <li>
                <a href="JavaScript:;">
                  <img class="fewmico" src="/assets/addons/ldcms/ldcms2024/images/douyin.svg" alt>
                </a>
                <div class="fewmimg">
                  <img src="<?php echo cdnurl($ld['dyewm'] ?? ''); ?>" alt="">
                  <p>抖音二维码</p>
                </div>
              </li>
              <li>
                <a href="JavaScript:;">
                  <img class="fewmico" src="/assets/addons/ldcms/ldcms2024/images/weixin.svg" alt>
                </a>
                <div class="fewmimg">
                  <img src="<?php echo cdnurl($ld['wechat'] ?? ''); ?>" alt="">
                  <p>微信公众号</p>
                </div>
              </li>
              <li>
                <a href="JavaScript:;">
                  <img class="fewmico" src="/assets/addons/ldcms/ldcms2024/images/qq.svg" alt>
                </a>
                <div class="fewmimg">
                  <img src="<?php echo cdnurl($ld['qqewm'] ?? ''); ?>" alt="">
                  <p>QQ群:<?php echo $ld['qqquns']; ?></p>
                </div>
              </li>
              <li>
                <a href="JavaScript:;">
                  <img class="fewmico" src="/assets/addons/ldcms/ldcms2024/images/xhs.svg" alt>
                </a>
                <div class="fewmimg">
                  <img src="<?php echo cdnurl($ld['xhsewm'] ?? ''); ?>" alt="">
                  <p>小红书二维码</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="footmid flexrow">
          <div class="footmid_l flexrow">
            <?php $__rsKvaX3FdP__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"");if(is_array($__rsKvaX3FdP__) || $__rsKvaX3FdP__ instanceof \think\Collection || $__rsKvaX3FdP__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__rsKvaX3FdP__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;$item["image"]=cdnurl($item["image"],true);$item["big_image"]=cdnurl($item["big_image"],true);?>
            <dl>
              <dt><a href="<?php echo $item['url']; ?>"
                  title="<?php echo $item['name']; ?>"><?php echo $item['name']; ?></a></dt>
              <?php $__J8F4LavXno__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"");if(is_array($__J8F4LavXno__) || $__J8F4LavXno__ instanceof \think\Collection || $__J8F4LavXno__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__J8F4LavXno__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav2): $mod = ($i % 2 );++$i;$nav2["image"]=cdnurl($nav2["image"],true);$nav2["big_image"]=cdnurl($nav2["big_image"],true);?>
              <dd><a href="<?php echo $nav2['url']; ?>"
                  title="<?php echo $nav2['name']; ?>"><?php echo $nav2['name']; ?></a></dd>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </dl>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
          <div class="footmid_r">
            <ul>
              <li>
                <div class="footmid_rdesc">
                  <p><?php echo $ld['tel']; ?></p>
                </div>
              </li>
              <li>
                <div class="footmid_rdesc">
                  <p><?php echo $ld['address']; ?></p>
                </div>
              </li>
              <li>
                <div class="footmid_rdesc">
                  <p><?php echo $ld['email']; ?></p>
                </div>
              </li>
            </ul>
            <div class="footmid_ewm ">
              <ul class="flexrow">
                <li>
                  <img src="<?php echo cdnurl($ld['wechat2'] ?? ''); ?>" alt>
                  <p>咨询微信客服</p>
                </li>
                <li>
                  <img src="<?php echo cdnurl($ld['wechat'] ?? ''); ?>" alt>
                  <p>微信公众号</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footcopy">
      <div class="con1400">
        <div class="footcitem flexrow">
          <div class="footc_l">
            <span class="footc_ldesc"><?php echo $ld['copyright']; ?></span>
            <span>备案号：<a href="https://beian.miit.gov.cn/"
                target="_blank" rel="noopener noreferrer"><?php echo $ld['icp']; ?></a></span>
                <?php $__mpCyYoZrFt__ =\addons\ldcms\model\Category::instance()->getHomeCategory(193,0,"");$__mpCyYoZrFt__=[$__mpCyYoZrFt__];if(is_array($__mpCyYoZrFt__) || $__mpCyYoZrFt__ instanceof \think\Collection || $__mpCyYoZrFt__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__mpCyYoZrFt__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
              <span><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['name']; ?></a></span>
              <?php endforeach; endif; else: echo "" ;endif; $__NRlgq89XaC__ =\addons\ldcms\model\Category::instance()->getHomeCategory(194,0,"");$__NRlgq89XaC__=[$__NRlgq89XaC__];if(is_array($__NRlgq89XaC__) || $__NRlgq89XaC__ instanceof \think\Collection || $__NRlgq89XaC__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__NRlgq89XaC__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
              <span><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['name']; ?></a></span>
              <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
          <div class="footc_r">
            <p>友情链接</p>
            <div class="footc_rlinks">
              <ul>
                <?php $__2xerapuQ1D__=\addons\ldcms\model\Links::instance()->getHomeList("link","");if(is_array($__2xerapuQ1D__) || $__2xerapuQ1D__ instanceof \think\Collection || $__2xerapuQ1D__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2xerapuQ1D__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="xuanfu">
        <ul>
          <li class="xfwxitem">
            <a href="	<?php echo $ld['wxtzlink']; ?>" target="_blank">
              <div class="xfimg flexrow">
                <img src="/assets/addons/ldcms/ldcms2024/images/xfico1.png" alt>
              </div>
              <div class="xfwx">
                <img src="<?php echo cdnurl($ld['wechat2'] ?? ''); ?>" alt="咨询微信客服">
                <p class="xfwxdesc">咨询微信客服</p>
              </div>
            </a>
          </li>
          <li class="xftelitem">
            <div class="xfimg flexrow">
              <img src="/assets/addons/ldcms/ldcms2024/images/xfico2.png" alt>
            </div>
            <div class="xfwx xftel">
              <p><?php echo $ld['tel']; ?></p>
              <span class="xfteldesc">立即获取方案或咨询</span>
            </div>
          </li>
          <li class="xftopitem">
            <div class="xfimg flexrow" id="goToTop">
              <img src="/assets/addons/ldcms/ldcms2024/images/xfico3.png" alt>
              <p>top</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- 底部导航 end -->

    <!-- 公用js -->
    

<script>
      $(document).ready(function(){
        
        // 电脑导航下滑时候样式
        $(function () {
          var nav = $(".top"); //得到导航对象baidu
          var win = $(window); //得到窗口对象
          var sc = $(document); //得到document文档对象。zhi
          win.scroll(function () {
            if (sc.scrollTop() >= 60) {
              nav.addClass("fixednav");
              $(".xuanfu").fadeIn();
            } else {
              nav.removeClass("fixednav");
              $(".xuanfu").fadeOut();
            }
          });
        });

         // 手机导航下滑时候样式
         $(function () {
          var wapnav = $(".waptop"); //得到导航对象baidu
          var wapwin = $(window); //得到窗口对象
          var wapsc = $(document); //得到document文档对象。zhi
          wapwin.scroll(function () {
            if (wapsc.scrollTop() >= 60) {
              wapnav.addClass("fixednav");
              // $(".xuanfu").fadeIn();
            } else {
              wapnav.removeClass("fixednav");
              // $(".xuanfu").fadeOut();
            }
          });
        });

        // 顶部搜索
        $('.top_searchico').click(function(){
          $('.searchitem').fadeIn();
        });
        $('.searchclose').click(function(){
          $('.searchitem').hide();
        });

         // 电脑导航下拉
         $(".nav>ul>li").mouseenter(function () {
          $(this)
            .find(".ernav")
            .slideDown()
            .end()
            .siblings("li")
            .find(".ernav")
            .hide();
        });
        $(".ernav").mouseleave(function () {
          $(this).hide();
        });

       // 返回顶部
       $('#goToTop').click(function () {
          $('html , body').animate({ scrollTop: 0 }, 'slow');
        });

        // 手机端语言切换
        $('.waptop_langa').click(function(){
          $('.langitem').fadeToggle();
        })

        // 手机端搜索效果
        $('.waptop_rs').click(function(){
          $('.wapsearch').fadeIn();
        });
        $('.wapsea_close').click(function(){
          $('.wapsearch').hide();
        });

        // 手机端导航栏目下拉效果
        $('.wapnav_ico').click(function() {
          $(this).toggleClass('active').parent('li').siblings().find('.wapnav_ico').removeClass('active');
          $(this).next('.wapernav').slideToggle().end().parent('li').siblings().find('.wapernav').slideUp();;
        });

        // 手机端导航下拉效果
        $('.waptop_rnav').click(function(){
          $('.wapnav').slideDown();
        })
        $('.wapnavt_r').click(function(){
          $('.wapnav').hide();
        });

        //  锚点缓慢滑动 
        $(function(){  
          $('a[href*=#],area[href*=#]').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
              var $target = $(this.hash);
              $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
              if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({
                  scrollTop: targetOffset
                },
                1000);
                return false;
              }
            }
          });
        });

        // animate 
        $('.animate').scrolla({
          mobile: false,
          once: true
        });

      })
    </script>



  </body>

</html>