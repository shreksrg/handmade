<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:61:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/index.html";i:1741759337;s:62:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/common.html";i:1716869348;s:60:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/head.html";i:1726207716;s:64:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/footmess.html";i:1709803868;s:60:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/foot.html";i:1721655678;s:62:"/var/webstars/handmade/addons/ldcms/view/ldcms2024/footjs.html";i:1709304090;}*/ ?>
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
                  <?php $__MecpObdly1__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"");if(is_array($__MecpObdly1__) || $__MecpObdly1__ instanceof \think\Collection || $__MecpObdly1__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__MecpObdly1__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;$item["image"]=cdnurl($item["image"],true);$item["big_image"]=cdnurl($item["big_image"],true);?>
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
                              <?php $__dz6EYraj7l__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"");if(is_array($__dz6EYraj7l__) || $__dz6EYraj7l__ instanceof \think\Collection || $__dz6EYraj7l__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__dz6EYraj7l__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav2): $mod = ($i % 2 );++$i;$nav2["image"]=cdnurl($nav2["image"],true);$nav2["big_image"]=cdnurl($nav2["big_image"],true);?>
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
                      <?php $__gOc81CPkh5__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"");if(is_array($__gOc81CPkh5__) || $__gOc81CPkh5__ instanceof \think\Collection || $__gOc81CPkh5__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__gOc81CPkh5__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;$item["image"]=cdnurl($item["image"],true);$item["big_image"]=cdnurl($item["big_image"],true);?>
                      <li class="flexrow">
                        <a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
                        <?php if($item['child']>0): ?>
                        <img class="wapnav_ico"
                          src="/assets/addons/ldcms/ldcms2024/images/jiantblue.png" alt>
                        <div class="wapernav">
                          <?php $__0mNItRucPO__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"");if(is_array($__0mNItRucPO__) || $__0mNItRucPO__ instanceof \think\Collection || $__0mNItRucPO__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__0mNItRucPO__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav2): $mod = ($i % 2 );++$i;$nav2["image"]=cdnurl($nav2["image"],true);$nav2["big_image"]=cdnurl($nav2["big_image"],true);?>
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
    <!--  -->
    <!-- Swiper -->
    <div class="swiper-container bannerswiper">
      <div class="swiper-wrapper">
        <?php $__87zaItmkdh__=\addons\ldcms\model\Ad::instance()->getHomeSlide("banner");if(is_array($__87zaItmkdh__) || $__87zaItmkdh__ instanceof \think\Collection || $__87zaItmkdh__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__87zaItmkdh__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="swiper-slide">
          <img class="banner_img" src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
          <div class="banner_desc flexrow">
            <?php echo $item['content']; ?>
          </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination banner_pag"></div>
    </div>

    <!-- Initialize Swiper -->
    <script>
      var bannerswiper = new Swiper('.bannerswiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        autoplay: true,
        speed: 1000,
        loop: true,
        pagination: {
          el: '.banner_pag',
          clickable: true,
        },
      });
    </script>

  </div>
  <!-- banner end -->

  <!-- 产品中心 -->
  <?php $page=null;$__I4YLCMPEzt__=\addons\ldcms\TagAction::instance()->exec(["action"=>"home_block","model_table_name"=>"product","alias"=>"cate"]);if(is_array($__I4YLCMPEzt__) || $__I4YLCMPEzt__ instanceof \think\Collection || $__I4YLCMPEzt__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__I4YLCMPEzt__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
  <section class="idx_item ">
    <div class="con1400">
      <div class="idx_titles">
        <h3><?php echo $cate['name']; ?></h3>
      </div>
      <div class="idx_pros">
        <div class="container con1400">
          <ul class="row">
            <?php $cid=$cate['id'];$mid=0;$page=null;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__lJ8xg3QFyD__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'4','ext'=>'','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__lJ8xg3QFyD__) || $__lJ8xg3QFyD__ instanceof \think\Collection || $__lJ8xg3QFyD__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__lJ8xg3QFyD__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animate" data-animate="fadeInUp" data-duration="1s"
              data-delay="0.<?php echo $i; ?>s">
              <a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                <div class="idx_pros_desc flexrow">
                  <h3><?php echo $item['title']; ?></h3>
                </div>
              </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__lJ8xg3QFyD__->render():"";$pages_total=$page&&!$simple?$__lJ8xg3QFyD__->total():0; ?>
          </ul>
        </div>
      </div>
      <div class="idxpros_more">
        <a href="<?php echo $cate['url']; ?>">查看全部产品 +</a>
      </div>
    </div>
  </section>
  <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__I4YLCMPEzt__->render():"";$pages_total=$page&&!$simple?$__I4YLCMPEzt__->total():0; ?>
  <!-- 产品中心 end -->

  <!-- 解决方案 -->
  <?php $page=null;$__64CBtUpAPM__=\addons\ldcms\TagAction::instance()->exec(["action"=>"home_block","model_table_name"=>"team","alias"=>"cate","key"=>"n"]);if(is_array($__64CBtUpAPM__) || $__64CBtUpAPM__ instanceof \think\Collection || $__64CBtUpAPM__ instanceof \think\Paginator): $n = 0; $__LIST__ = $__64CBtUpAPM__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($n % 2 );++$n;?>
  <section class="idx_item ">
    <div class="con1400">
      <div class="idx_titles">
        <h3><?php echo $cate['name']; ?></h3>
      </div>
    </div>
    <div class="idx_fa  animate" data-animate="fadeInUp" data-duration="1.5s" data-delay="0.1s">
      <ul>
        <?php $cid=$cate['id'];$mid=0;$page=null;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__o9CgH5D1Pf__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'3','ext'=>'','flag'=>'top','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__o9CgH5D1Pf__) || $__o9CgH5D1Pf__ instanceof \think\Collection || $__o9CgH5D1Pf__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__o9CgH5D1Pf__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <li class="idx_falist<?php echo $i; if($i==1): ?> active <?php endif; ?>" style="background-image: url('<?php echo $item['image']; ?>');">
          <a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>">
            <div class="idxfa_title flexrow">
              <h3><?php echo $item['title']; ?></h3>
            </div>
            <div class="idx_fadesc  animate" data-animate="fadeIn" data-duration="1.5s" data-delay="0.1s">
              <h3><?php echo $item['title']; ?></h3>
              <div class="idx_fadesc_item ">
                <p><?php echo $item['seo_description']; ?></p>
                <button>了解更多 ></button>
              </div>
            </div>
          </a>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__o9CgH5D1Pf__->render():"";$pages_total=$page&&!$simple?$__o9CgH5D1Pf__->total():0; ?>
      </ul>
    </div>
    <script>
      $(document).ready(function () {
        $(".idx_fa ul li").mouseenter(function () {
          $(this).addClass("active").siblings().removeClass("active");
        })
        $('.idx_falist1').mouseenter(function () {
          $('.idx_falist1').css({ "left": "0px" });
          $('.idx_falist2').css({ "left": "50%" });
          $('.idx_falist3').css({ "left": "75%" });
        });
        $('.idx_falist2').mouseenter(function () {
          $('.idx_falist1').css({ "left": "0px" });
          $('.idx_falist2').css({ "left": "25%" });
          $('.idx_falist3').css({ "left": "75%" });
        });
        $('.idx_falist3').mouseenter(function () {
          $('.idx_falist1').css({ "left": "0px" });
          $('.idx_falist2').css({ "left": "25%" });
          $('.idx_falist3').css({ "left": "50%" });
        });
      })
    </script>
  </section>
  <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__64CBtUpAPM__->render():"";$pages_total=$page&&!$simple?$__64CBtUpAPM__->total():0; ?>
  <!-- 解决方案 end -->

  <!-- 关于我们 -->
  <section class="idx_item idx_about">
    <div class="con1400">
      <?php $__PEIFfGuRwK__ =\addons\ldcms\model\Category::instance()->getHomeCategory(125,0,"");$__PEIFfGuRwK__=[$__PEIFfGuRwK__];if(is_array($__PEIFfGuRwK__) || $__PEIFfGuRwK__ instanceof \think\Collection || $__PEIFfGuRwK__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__PEIFfGuRwK__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
      <div class="idx_titles">
        <h3><?php echo $item['name']; ?></h3>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="container con1400">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12  animate" data-animate="fadeInLeft" data-duration="1s"
          data-delay="0.1s">
          <div class="idx_about_l">
            <?php $content=\addons\ldcms\model\Document::instance()->getHomeInfoByCId(163);?>
            <h3><?php echo $content['title']; ?></h3>
            <p>
              <?php echo $content['seo_description']; ?>
            </p>
            <a href="<?php echo $content['url']; ?>">了解更多 ></a>
            <?php unset($content);?>
            <div class="idx_about_num">
              <div class="numCount">
                <ul class="flexrow">
                  <li>
                    <div class="item">
                      <div class="numU">
                        <span class="numCX" data-startval="0" data-endval="10" data-speed="7"
                          data-decimals="0" id="mumC1">10</span>
                        <sup class="unitC">+</sup>
                        <!-- <i class="numi">%</i> -->
                      </div>
                      <div class="indc">10年核心团队经验</div>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <div class="numU">
                        <span class="numCX" data-startval="0" data-endval="20" data-speed="7"
                          data-decimals="0" id="mumC2">20</span>
                        <sup class="unitC">+</sup>
                        <!-- <i class="numi">%</i> -->
                      </div>
                      <div class="indc">超20项知识产权</div>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <div class="numU">
                        <span class="numCX" data-startval="0" data-endval="3000" data-speed="7"
                          data-decimals="0" id="mumC3">3000</span>
                        <sup class="unitC">+</sup>
                        <!-- <i class="numi">%</i> -->
                      </div>
                      <div class="indc">服务品牌客户超3000家</div>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <div class="numU">
                        <span class="numCX" data-startval="0" data-endval="50" data-speed="7"
                          data-decimals="0" id="mumC4">50</span>
                        <sup class="unitC">+</sup>
                        <!-- <i class="numi">%</i> -->
                      </div>
                      <div class="indc">培养技术人员50多名</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <script src="/assets/addons/ldcms/ldcms2024/js/count.js" type="text/javascript" charset="utf-8"></script>
          <script type="text/javascript">
            $(function () {
              var countCXArr = [];
              var countCX = function () {
                $(".numCount").each(function (i, dom) {
                  if (countCXArr[i] && countCXArr[i] === true) {
                    return;
                  }
                  var sT;
                  var ncTop;
                  sT = $(window).scrollTop();
                  ncTop = $(dom).offset().top;
                  var id, decimals, startVal, endVal, duration;
                  if (sT > ncTop - $(window).height() && sT < ncTop) {
                    $(dom)
                      .find(".numCX")
                      .each(function () {
                        id = $(this).attr("id");
                        (decimals = $(this).attr("data-decimals")),
                          (startVal = $(this).attr("data-startVal")),
                          (endVal = $(this).attr("data-endVal")),
                          (duration = $(this).attr("data-speed"));
                        new CountUp(
                          id,
                          startVal,
                          endVal,
                          decimals,
                          duration,
                          {
                            useEasing: true, //效果
                            separator: "", //数字分隔符
                          }
                        ).start(); // target：目标元素id, startVal：你想要开始的值, endVal：你想要到达的值, decimals：小数位数，默认值为0, duration：动画持续时间为秒，默认值为2, options：选项的可选对象
                        countCXArr[i] = true;
                      });
                  }
                });
              };
              countCX();
              $(window).on("scroll", function () {
                countCX();
              });
            });
          </script>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  animate" data-animate="fadeInRight" data-duration="1.5s"
          data-delay="0.1s">
          <?php $content=\addons\ldcms\model\Document::instance()->getHomeInfoByCId(163);?>
          <div class="idx_about_r">
            <img src="<?php echo $content['image']; ?>" alt="<?php echo $content['title']; ?>">
          </div>
          <?php unset($content);?>
        </div>
      </div>
    </div>

  </section>
  <!-- 关于我们 end -->

  <!-- 案例展示 -->
  <?php $page=null;$__pyxwGezSBa__=\addons\ldcms\TagAction::instance()->exec(["action"=>"home_block","model_table_name"=>"case","alias"=>"cate","key"=>"n"]);if(is_array($__pyxwGezSBa__) || $__pyxwGezSBa__ instanceof \think\Collection || $__pyxwGezSBa__ instanceof \think\Paginator): $n = 0; $__LIST__ = $__pyxwGezSBa__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($n % 2 );++$n;?>
  <section class="idx_item idx_hzitem">
    <div class=" con1400">
      <div class="idx_titles">
        <h3><?php echo $cate['subname']; ?></h3>
      </div>
      <div class="idx_hezuo  animate" data-animate="fadeInUp" data-duration="1.5s" data-delay="0.1s">
        <!-- Swiper -->
        <div class="swiper-container idxhz_swiper">
          <ul class="swiper-wrapper">
            <?php $cid=$cate['id'];$mid=0;$page=null;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__D8Exsr24na__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'6','ext'=>'','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__D8Exsr24na__) || $__D8Exsr24na__ instanceof \think\Collection || $__D8Exsr24na__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__D8Exsr24na__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <li class="swiper-slide">
              <a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                <div class="idxhz_title">
                  <h3><?php echo $item['title']; ?></h3>
                </div>
              </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__D8Exsr24na__->render():"";$pages_total=$page&&!$simple?$__D8Exsr24na__->total():0; ?>
          </ul>
        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next idxhz_next"></div>
        <div class="swiper-button-prev idxhz_prev"></div>

        <!-- Initialize Swiper -->
        <script>
          var idxhz_swiper = new Swiper('.idxhz_swiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            navigation: {
              nextEl: '.idxhz_next',
              prevEl: '.idxhz_prev',
            },
            breakpoints: {
              320: {  //当屏幕宽度大于等于320
                slidesPerView: 1,
                spaceBetween: 10
              },
              768: {  //当屏幕宽度大于等于768
                slidesPerView: 2,
                spaceBetween: 20
              },
              1280: {  //当屏幕宽度大于等于1280
                slidesPerView: 3,
                spaceBetween: 30
              }
            },
          });
        </script>
      </div>
    </div>
  </section>
  <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__pyxwGezSBa__->render():"";$pages_total=$page&&!$simple?$__pyxwGezSBa__->total():0; ?>
  <!-- 案例展示 end -->

  <!-- 新闻中心 -->
  <?php $page=null;$__VWMinjPTms__=\addons\ldcms\TagAction::instance()->exec(["action"=>"home_block","model_table_name"=>"news","alias"=>"cate","key"=>"n"]);if(is_array($__VWMinjPTms__) || $__VWMinjPTms__ instanceof \think\Collection || $__VWMinjPTms__ instanceof \think\Paginator): $n = 0; $__LIST__ = $__VWMinjPTms__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($n % 2 );++$n;?>
  <section class="idx_item idx_news">
    <div class="con1400">
      <div class="idx_titles">
        <h3><?php echo $cate['name']; ?></h3>
      </div>
    </div>
    <div class="container con1400">
      <div class="row">
        <?php $cid=$cate['id'];$mid=0;$page=null;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__PiFsp8wHjn__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'3','ext'=>'','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__PiFsp8wHjn__) || $__PiFsp8wHjn__ instanceof \think\Collection || $__PiFsp8wHjn__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__PiFsp8wHjn__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate" data-animate="zoomIn" data-duration="1.5s"
          data-delay="0.<?php echo $i; ?>s">
          <div class="idxnews_item">
            <a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>">
              <div class="idxnews_img">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
              </div>
              <div class="idxnews_desc">
                <h4><?php echo $item['cname']; ?></h4>
                <h3><?php echo ld_str_cut($item['title'] ?? '',30); ?></h3>
                <p>
                  <?php echo ld_str_cut($item['seo_description'] ?? '',60); ?>
                </p>
                <button>了解更多 ></button>
              </div>
            </a>
          </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__PiFsp8wHjn__->render():"";$pages_total=$page&&!$simple?$__PiFsp8wHjn__->total():0; ?>
      </div>
    </div>
    <div class="idxnews_link">
      <a href="<?php echo $cate['url']; ?>">查看全部新闻 +</a>
    </div>
  </section>
  <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__VWMinjPTms__->render():"";$pages_total=$page&&!$simple?$__VWMinjPTms__->total():0; ?>
  <!-- 新闻中心 end -->

  <!-- 合作客户 -->
  <section class="idx_item idx_kehu">
    <div class="con1400">
      <?php $__MzPwVdvWtc__ =\addons\ldcms\model\Category::instance()->getHomeCategory(146,0,"");$__MzPwVdvWtc__=[$__MzPwVdvWtc__];if(is_array($__MzPwVdvWtc__) || $__MzPwVdvWtc__ instanceof \think\Collection || $__MzPwVdvWtc__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__MzPwVdvWtc__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
      <div class="idx_titles">
        <h3><?php echo $item['name']; ?></h3>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      <div class="idxkehu_item animate" data-animate="fadeInUp" data-duration="1.5s" data-delay="0.1s">
        <!-- Swiper -->
        <div class="swiper-container idxkh_swiper">
          <div class="swiper-wrapper">
            <?php $cid=146;$mid=0;$page=null;$simple=null;            // 不传入cid默认获取栏目cid,并且开启分页
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
            is_null($simple)&&$addon_config['simple']&&request()->isMobile()?$simple=true:'';$__8aSChNLEtu__=\addons\ldcms\model\Document::instance()->getHomeList(['cid'=>$cid,'mid'=>$mid,'limit'=>'18','ext'=>'','filterWhere'=>isset($filterWhere)?$filterWhere:[],'_where'=>isset($_where)?$_where:[],'page'=>$page,'simple'=>$simple,'_order'=>'']); if(is_array($__8aSChNLEtu__) || $__8aSChNLEtu__ instanceof \think\Collection || $__8aSChNLEtu__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__8aSChNLEtu__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="swiper-slide">
              <div class="idxkh_simg">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" title="<?php echo $item['title']; ?>">
              </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; $pages=$page?$__8aSChNLEtu__->render():"";$pages_total=$page&&!$simple?$__8aSChNLEtu__->total():0; ?>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination idxkh_spagination"></div>

        <!-- Initialize Swiper -->
        <script>
          var idxkh_swiper = new Swiper('.idxkh_swiper', {
            slidesPerView: 6,
            slidesPerColumn: 2,
            spaceBetween: 30,
            // loop: true,
            pagination: {
              el: '.idxkh_spagination',
              clickable: true,
            },

            breakpoints: {
              320: {  //当屏幕宽度大于等于320
                slidesPerView: 2,
                spaceBetween: 10
              },
              768: {  //当屏幕宽度大于等于768
                slidesPerView: 4,
                spaceBetween: 20
              },
              1280: {  //当屏幕宽度大于等于1280
                slidesPerView: 6,
                spaceBetween: 30
              }
            },
          });
        </script>
      </div>
    </div>

  </section>
  <!-- 合作客户 end -->

  <!-- 底部表单 -->
  <section class="idx_footmess animate"
data-animate="fadeInUp" data-duration="1.5s" data-delay="0.1s">
      <div class="con1400">
        <?php $__Nm2sHZLP5a__ =\addons\ldcms\model\Category::instance()->getHomeCategory(162,0,"");$__Nm2sHZLP5a__=[$__Nm2sHZLP5a__];if(is_array($__Nm2sHZLP5a__) || $__Nm2sHZLP5a__ instanceof \think\Collection || $__Nm2sHZLP5a__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Nm2sHZLP5a__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
            <?php $__BRCr3Ffnai__ =\addons\ldcms\model\Category::instance()->getHomeNav(0,"");if(is_array($__BRCr3Ffnai__) || $__BRCr3Ffnai__ instanceof \think\Collection || $__BRCr3Ffnai__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__BRCr3Ffnai__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;$item["image"]=cdnurl($item["image"],true);$item["big_image"]=cdnurl($item["big_image"],true);?>
            <dl>
              <dt><a href="<?php echo $item['url']; ?>"
                  title="<?php echo $item['name']; ?>"><?php echo $item['name']; ?></a></dt>
              <?php $__n7hP6rv8lC__ =\addons\ldcms\model\Category::instance()->getHomeNav($item['id'],"");if(is_array($__n7hP6rv8lC__) || $__n7hP6rv8lC__ instanceof \think\Collection || $__n7hP6rv8lC__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__n7hP6rv8lC__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav2): $mod = ($i % 2 );++$i;$nav2["image"]=cdnurl($nav2["image"],true);$nav2["big_image"]=cdnurl($nav2["big_image"],true);?>
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
                <?php $__CKRS4x7NAk__ =\addons\ldcms\model\Category::instance()->getHomeCategory(193,0,"");$__CKRS4x7NAk__=[$__CKRS4x7NAk__];if(is_array($__CKRS4x7NAk__) || $__CKRS4x7NAk__ instanceof \think\Collection || $__CKRS4x7NAk__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__CKRS4x7NAk__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
              <span><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['name']; ?></a></span>
              <?php endforeach; endif; else: echo "" ;endif; $__VzwBdxGAkF__ =\addons\ldcms\model\Category::instance()->getHomeCategory(194,0,"");$__VzwBdxGAkF__=[$__VzwBdxGAkF__];if(is_array($__VzwBdxGAkF__) || $__VzwBdxGAkF__ instanceof \think\Collection || $__VzwBdxGAkF__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__VzwBdxGAkF__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
              <span><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['name']; ?></a></span>
              <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
          <div class="footc_r">
            <p>友情链接</p>
            <div class="footc_rlinks">
              <ul>
                <?php $__C9JN5k2BgY__=\addons\ldcms\model\Links::instance()->getHomeList("link","");if(is_array($__C9JN5k2BgY__) || $__C9JN5k2BgY__ instanceof \think\Collection || $__C9JN5k2BgY__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__C9JN5k2BgY__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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