<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head v="12">
    <meta charset="UTF-8" />
    <title><?php echo C('webtitle');?></title>
    <link rel="stylesheet" href="/Public/Home/css/main.css" />
    <link rel="stylesheet" href="/Public/Home/css/swiper.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
<meta name="renderer" content="webkit">
    <script type="text/javascript" src="/Public/Home/js/jquery-1.11.1.min.js" ></script>
   <!--  <script type="text/javascript" src="/Public/Home/js/calendar.min.js" ></script> -->
    <script type="text/javascript" src="/Public/Home/js/swiper-3.4.2.jquery.min.js" ></script>
    <script type="text/javascript" src="/Public/Home/js/main.js" ></script>
    <script src="/Public/Home/js/ntog.js"></script>
  </head>
  <body>
    <!-- 头部 -->
    <div id="header">
      <div class="min-width">
        <div class="logo"> <a href="#"><img src="/Public/Home/picture/logo-m.png" /></a> </div>
        <div class="text"> <img src="/Public/Home/picture/index_01.png"  /> </div>
        <div class="phone"> </div>
      </div>
    </div>
    <div id="nav">
      <div class="min-width">
        <ul>
            <li><a href="<?php echo C('weburl');?>">首页</a></li>
            <li><a href="<?php echo C('weburl');?>#why-select">起名优势</a></li>
            <li><a href="<?php echo C('weburl');?>#place-order">马上起名</a></li>
            <li><a href="<?php echo C('weburl');?>#problem">常见问答</a></li>
            <li><a href="<?php echo C('weburl');?>#evaluate">客户评价</a></li>
            <li><a  href="<?php echo U('order/pchistory');?>">历史订单</a></li>
        </ul>
      </div>
    </div>

    
<script src="/Public/Home/js/cookie.js"></script>
<script src="/Public/Home/js/layer.js"></script>
<div id="banner" class="jump-form"><img src="/Public/Home/picture/index_03.jpg" _src="/Public/Home/picture/index_03.jpg" _srcs="/Public/Home/picture/index_03_s.png" /></div>
<!-- 头部结束 -->

<div id="container">
  <!-- 在线下单 -->
  <div class="index-section place-order" name='place-order' id='place-order'>
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <img src="/Public/Home/picture/index_98.png" /> </div>
      </div>
      <div class="section">
        <div class="step-wrap">
          <h2>简单3步 马上取到好名字！</h2>
          <p class="intro">为你节省 学习起名知识所需的大量时间</p>
          <div class="step"> <a href="javascript:;">输入资料</a><span>&gt;</span> <a href="javascript:;">订单付款</a><span>&gt;</span> <a href="javascript:;">选取名字</a> </div>
        </div>
                <form  id="form" action="<?php echo U('order/add');?>" method="post">
          <ul>
      <li style="clear: both" class="wapnonel">
              <!--<label style="background-position:0 0;"></label>-->
              <div class="sexx">状态</div>
              <div class="input-box">
                <div class="btn-raido active" data-val="1" style="width: auto;" onClick="csztfun()"> <i></i>已出生 </div>
                <div class="btn-raido" data-val="0" style="width: auto;" onClick="csztfun1()"> <i></i>未出生</div>
                <input name="cszt" id='cszt' type="hidden" value="1" />
              </div>
            </li>
            <li class="wapnonel xingshi">
              <!--<label class="one"></label>-->
              <div class="sexx">姓氏</div>
              <div class="input-box" style="position:relative;">
                <input class="username animated" name="name" style='position:absolute;top:0;left:10px;font-size: 20px;line-height:30px;width:250px;' type="text" value="" placeholder="请填写姓氏" />
              </div>
            </li>
            <li class="zibei">
              <div class="sexx">字辈</div>
              <!--<label style="background-position:-322px 0;"></label>-->
              <div class="input-box" style="position:relative;">
                <input class="animated" name="zibei" style='font-size: 20px;line-height:30px;width:250px;position:absolute;top:0;left:10px;' type="text" value="" placeholder="没有可不填" />
              </div>
            </li>
            <div style="clear: both"></div>
            <li style="clear: both" class="wapnonel">
              <!--<label style="background-position:0 0;"></label>-->
              <div class="sexx">性别</div>
              <div class="input-box">
                <div class="btn-raido gd_nan active" data-val="1"> <i></i><span class="nan">男</span></div>
                <div class="btn-raido gd_nv" data-val="0"> <i></i><span class="nv">女</span></div>
        <div class="btn-raido gd_wz" data-val="-1" style="display:none;width:90px;"> <i></i>未知 </div>
                <input name="gender" id='gender' type="hidden" value="1" />
              </div>
            </li>
           <li class="wapnonel shengri">
            <div class="sexx srycq">生日</div>
             <!-- <label class="shengchent" ></label>-->
          <div class="input-box">
              <div class="time1">
              <select  name="b_input" style="width:57px;">
                <option value="0">公历</option>
                <option value="1">农历</option>
              </select>
              </div>

            <div class="time1">
                <select class=" input" name="birthday" style="width: 80px !important;">
                  <?php if(is_array($years)): $i = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo); ?>" <?php if($vo ==date('Y') ): ?>selected="selected"<?php endif; ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <span>年</span>
          </div>
                  <div class="time1">
          <select name="birthm">
            <?php $__FOR_START_680123382__=1;$__FOR_END_680123382__=12;for($i=$__FOR_START_680123382__;$i < $__FOR_END_680123382__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($i ==date('m') ): ?>selected="selected"<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
          </select>
                  <span>月</span>
            </div>
            <div class="time1">
          <select name="birthd">
            <?php $__FOR_START_1851031613__=1;$__FOR_END_1851031613__=31;for($i=$__FOR_START_1851031613__;$i < $__FOR_END_1851031613__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($i ==date('d') ): ?>selected="selected"<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
          </select>
                  <span>日</span>
            </div>
            </div>
          <li class="wapnonel shengri">
            <div class="sexx srycq">生辰</div>
            <div class="input-box">
          <div class="time1">
          <select class="hour" name="birthtime" style="width:60px;">
            <?php $__FOR_START_40245244__=0;$__FOR_END_40245244__=23;for($i=$__FOR_START_40245244__;$i < $__FOR_END_40245244__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($i ==date('h') ): ?>selected="selected"<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
          </select>
          <span>时</span>
          </div>
          <div class="time1">
          <select class="minutes" name="birthmin" style="width:60px;">
            <?php $__FOR_START_1753566504__=0;$__FOR_END_1753566504__=59;for($i=$__FOR_START_1753566504__;$i < $__FOR_END_1753566504__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($i ==date('i') ): ?>selected="selected"<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
          </select>
                  <span>分</span>
                  </div>
              </div>
            </li>
      <style>

@media only screen and (min-width: 861px){
.sexx{ font-size: 20px; font-weight: bold; color: #000; width: 50px;border: none;float: left; margin-left: 25px; font-family: "黑体";}
.zibei{ float: right;width: 48%;}
.xingshi{ float: left; width: 48%;}

@media only screen and (max-width: 860px) {
    .bannernew img{ width: 100%; height: auto;}
    .phone{display: none;}
    .text img{ height: 96px;}
    .logo img{ height: 96px;}
    .xingshi{}
    .zibei{ display: none;}

    .sexx{ font-size: 14px; font-weight: bold; color: #000; width: 50px;border: none;float: left; margin-left: 10px;}
    .shengchent{display: none;}
</style>
            <li class="wapnonel">
              <!--<label style="background-position:-153px 0;"></label>-->
              <div class="sexx">电话</div>
              <div class="input-box" style="position:relative;">
                <input class="animated" name="mobile" style='font-size: 20px;line-height:30px;position:absolute;top:0;left:10px;width: 330px;' type="text" value="" placeholder="请填写邮箱或电话（可不填）" />
              </div>
            </li>
            <div style="clear: both"></div>
            <li class="submit">
              <input id="cs" type="submit" value="立即获取100个吉祥美名"/>
            </li>
            <li class="text"> <span style="font-size:15px;">已有 9697889人选择58阳生起名网，好评率高达99.9%</span> </li>
          </ul>
        </form>
      </div>
      <div class="bottom"></div>
    </div>
  </div>
  <!-- 在线下单结束 -->

  <!-- 为什么选择 -->
  <div class="index-section why-select jump-form" id='why-select' name='why-select'>
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <img src="/Public/Home/picture/index_07.png" /> </div>
      </div>
      <div class="section">
        <div class="left"> <img src="/Public/Home/picture/index_10.png"/> </div>
        <div class="right">
          <dl>
            <dt> <img src="/Public/Home/picture/index_11.png" /> </dt>
            <dd class="title">正宗周易算法</dd>
            <dd class="intro">起名是一辈子的事，选择正版专业，给你一个算法完整的正宗起名结果，盗版算法不完整，容易耽误孩子一生。</dd>
          </dl>
          <dl>
            <dt> <img src="/Public/Home/picture/index_12.png" /> </dt>
            <dd class="title">1000个好听好记的吉祥美名</dd>
            <dd class="intro">正版起名可以为您提供1000个以上精选美名，好听、好记、好写，总能选到一个满意的。</dd>
          </dl>
          <dl>
            <dt> <img src="/Public/Home/picture/index_13.png" /> </dt>
            <dd class="title">文化底蕴丰厚</dd>
            <dd class="intro">基于易经、诗经、唐诗宋词等国学经典 如：连胜文名字来自《论语.雍也》——“质胜文则野，文胜质则史“。</dd>
          </dl>
          <dl>
            <dt> <img src="/Public/Home/picture/index_14.png" /> </dt>
            <dd class="title">正确的喜用神</dd>
            <dd class="intro">首创需要什么补什么，独家图形化展示，拥有理论著作权。</dd>
          </dl>
        </div>
        <div style=" clear:both;">

        </div>
      </div>
      <div class="bottom bottom2"></div>
    </div>
  </div>
  <!-- 为什么选择结束 -->

  <!-- 优势 -->
  <div class="index-section advantage jump-form">
    <div class="min-width">
      <div class="section">
        <div class="top-wrap"> <img src="/Public/Home/picture/index_15.png"/>
          <p>女宝宝  公历生日  2019年5月18日 22点30分</p>
        </div>
        <ul>
          <li>
            <div class="left">
              <div class="box"><span>专业正版\算法完整</span></div>
            </div>
            <div class="center center-0"></div>
            <div class="right">
              <div class="box"><span>盗版\算法缺失\偏娱乐</span></div>
            </div>
          </li>
          <li>
            <div class="left">
              <div class="box"><span>八字五行、藏干精准分析，旺相休囚死，知命改命。</span></div>
            </div>
            <div class="center center-1"></div>
            <div class="right">
              <div class="box"><span>八字五行表层个数分析，入门水平，容易错漏。</span></div>
            </div>
          </li>
          <li>
            <div class="left">
              <div class="box"><span>周易正宗算法精确计算五行含量</span></div>
            </div>
            <div class="center center-2"></div>
            <div class="right">
              <div class="box"><span>业余水平简单相加五行含量。</span></div>
            </div>
          </li>
          <li>
            <div class="left">
              <div class="box"><span>需要什么则补什么（运算复杂），喜用神选择正确</span></div>
            </div>
            <div class="center center-3"></div>
            <div class="right">
              <div class="box"><span>缺什么就补什么（运算简单），喜用神选错两个。</span></div>
            </div>
          </li>
          <li>
            <div class="left">
              <div class="box"><span>喜用神正确，甄选出来的汉字全部对宝宝有利。</span></div>
            </div>
            <div class="center center-4"></div>
            <div class="right">
              <div class="box"><span>喜用神错误，甄选出来的大部分汉字对宝宝有害。</span></div>
            </div>
          </li>
          <li>
            <div class="left">
              <div class="box"><span>三才五格精准评分，从各方面展示名字在三才五格方面的助运效果，助运指数一目了然。</span></div>
            </div>
            <div class="center center-5"></div>
            <div class="right">
              <div class="box"><span>采用传统数字展示，晦涩难懂不能直接表示具体含义。</span></div>
            </div>
          </li>
        </ul>
        <div class="bottom-wrap"> <img src="/Public/Home/picture/index_22.png" /> </div>
      </div>
    </div>
  </div>
  <!-- 优势结束 -->




  <!-- 评论、问题-->
  <div class="index-section evaluate jump-form" name='evaluate' id='evaluate'>

<div class="">
	<div class="hprc" id="pj">
	  <div class="w1000">
		<img src="/Public/Home/picture/hprc.png" class="title">
		<div class="l">
		  <h1>真实评价<span><img src="/Public/Home/picture/x.png"><img src="/Public/Home/picture/x.png"><img src="/Public/Home/picture/x.png"><img src="/Public/Home/picture/x.png"><img src="/Public/Home/picture/x.png"></span></h1>
		  <div class="pj_title"> <span href="">名字很好(980)</span> <span href="">名字好听(850)</span> <span href="">分析准确(740)</span> <span href="">态度很好(680)</span> <span href="">寓意深刻(520)</span> <span href="">大气响亮(490)</span> <span href="">打分很高(370)</span> <span href="">专业可信(220)</span> </div>
		  <div class="hd" id="demoxj">
			<ul>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******0128 评论：</span></li>
			  <li>这家网站起名考虑得很全面，名字分数很高，和八字结合得很好，强烈推荐</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>20Z1356***2263 评论：</span></li>
			  <li>八字分析很专业，起到了很多好名字，目前还不知道选择哪个名字，</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******0123 评论：</span></li>
			  <li>朋友介绍过来的，果然是很棒的起名网站，好几百个吉祥的名字给我选择，</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******0189 评论：</span></li>
			  <li>这家起名网站很专业，帮我起了好几批名字，最终选到了满意的好名字，</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******2565 评论：</span></li>
			  <li>不愧是中国权威的起名网站，起的名字很大气，个个都是98分以上的好名字</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******2333 评论：</span></li>
			  <li>还不错，起的名字很满意，五星好评</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******5562 评论：</span></li>
			  <li>随便试试，哪知道付款后，得出的名字让我有点吃惊，竟然有这么多有寓意的名字</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******2356 评论：</span></li>
			  <li>刚支付完有点质疑，后来我把起的名字给别的大师看，大师说这名字很好，我就放心了</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******5566 评论：</span></li>
			  <li> 宝宝出生，急需名字办理出生证，没想到这么快就起了这么多好名字给我选择</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******4489 评论：</span></li>
			  <li>名字很好，不俗气，听起来就很有气质！这家起名网站值得推荐</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******5689 评论：</span></li>
			  <li>起名很权威，好多名字都是出自楚辞诗经，</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******1256 评论：</span></li>
			  <li>起到的好名字太多了，现在还没有确定选择哪个名字，</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******8942 评论：</span></li>
			  <li>之前找了好几家起名网站，都没有起到满意的名字，最后在周易起名网选到了心仪的名字</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******2365 评论：</span></li>
			  <li>一个同事介绍来的，给宝宝取的 家人都满意 很专业</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******1256 评论：</span></li>
			  <li>客服很有耐心，不厌其烦的帮我分析名字，服务态度值得称赞</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******5986 评论：</span></li>
			  <li>很不错，名字我们也很中意，谢谢了。会介绍给朋友的。</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******5698 评论：</span></li>
			  <li>起的名字很好，不俗气，也很清新，很有个性</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******2354 评论：</span></li>
			  <li>出结果很快，从众多名字中选了两个,家人都很满意</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******0101 评论：</span></li>
			  <li>名字评分都很高，原来35元就可以起这么多好名字</li>
			  <li><span><?php echo date('Y-m-d') ?></span><span>2019******0145 评论：</span></li>
			  <li>先开始看价格很便宜，担心起的名字不好，最后还是在找周易起名网起到满意的名字了</li>
			</ul>
		  </div>
		  <div class="form">
			<div class="div">
			  <label>我的订单号：</label>
			  <div>
				<input type="text">
			  </div>
			</div>
			<div class="div">
			  <label>我的评论语：</label>
			  <div>
				<textarea rows="3" cols="20"></textarea>
			  </div>
			</div>
			<div class="div">
			  <button onClick="javascript:alert('您输入的订单号错误');">提交评论</button>
			</div>
		  </div>
		</div>
		<div class="r">
		  <h1>最近3天成交订单</h1>
		  <div id="nxt">
			<ul>

			  <li>58阳生起名 <?php echo date('Y');?>*****38046 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23006 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35087 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23064 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****48211 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****21677 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****53868 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****48697 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****14973 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17576 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17827 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17568 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****65615 <?php echo date('m-d') ?>  **9元</li>
			  <li>58阳生起名 <?php echo date('Y');?>*****68261 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23006 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35087 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23064 <?php echo date('m-d') ?>  **9元</li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17568 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****65615 <?php echo date('m-d') ?>  **9元</li>
			  <li>58阳生起名 <?php echo date('Y');?>*****68261 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23006 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35087 <?php echo date('m-d') ?>  **9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23064 <?php echo date('m-d') ?>  **9元</li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046 <?php echo date('m-d') ?>  **9元 </li>
			</ul>
		  </div>
		  <div class="cx">
			  <input type="text" name="dingdanhao"  placeholder="请输入您14位数的订单号"/>
			  <button onClick="javascript:alert('您输入的订单号错误');" type="submit">订单查询</button>
		  </div>
		</div>
    <div style=" clear:both;">
	  </div>
	</div>

</div>


<script type="text/javascript" src="/Public/Home/js/scroll_s.js" ></script>
<script type="text/javascript">
       		$(function () {
	            $("#demoxj").myScroll({
	            speed: 40, //数值越大，速度越慢
	            rowHeight: 30 //li的高度
	            });
	             $("#nxt").myScroll({
	            speed: 40, //数值越大，速度越慢
	            rowHeight: 30 //li的高度
	            });
	        });
</script>


    <!--<div class="min-width">
      <div class="top">
        <div class="top-title"> <img src="/Public/Home/picture/index_31.png" /> </div>
      </div>
      <div class="section">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <ul>
                <li>
                  <div class="top-text">
                    <label>订单号：CS17***21352</label>
                  </div>
                  <div class="text">不愧是中国权威的起名网站，起的名字很大气，个个都是98分以上的好名字。</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS17***54253</label>
                  </div>
                  <div class="text">宝宝出生，急需名字办理出生证，没想到这么快就起了这么多好名字给我选择。</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS17***73242</label>
                  </div>
                  <div class="text">名字很好，不俗气，听起来就很有气质！这家起名网站值得推荐。</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS17***33214</label>
                  </div>
                  <div class="text">必须好评，服务很到位，开始我搞错日期了，回复邮件以后帮我改过来了！谢谢，值得信赖。</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS17***43256</label>
                  </div>
                  <div class="text">起名很权威，好多名字都是出自楚辞诗经！</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS39***13405</label>
                  </div>
                  <div class="text">之前找了好几家起名网站，都没有起到满意的名字，最后在周易起名网选到了心仪的名字。</div>
                </li>
              </ul>
            </div>
            <div class="swiper-slide">
              <ul>
                <li>
                  <div class="top-text">
                    <label>订单号：CS59***17498</label>
                  </div>
                  <div class="text">一个同事介绍来的，给宝宝取的 家人都满意 很专业。</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS38***12237</label>
                  </div>
                  <div class="text">楼上的，我和你一样，刚开始也很怀疑能否起得名字让我们满意，犹豫再三还是买了，结果起的名字还是蛮让人满意的，再次感谢八字起名网的团队。</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS35***28301</label>
                  </div>
                  <div class="text">客服很有耐心，不厌其烦的帮我分析名字，服务态度值得称赞。</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS33***55690</label>
                  </div>
                  <div class="text">经过两次重新起名，我们最终还是选择了你们第一次提供的名字，毕竟姓王的不好起名，我也知道，名字还蛮有寓意的，最主要是符合我孩子八字啊，感谢感谢。</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS51***33755</label>
                  </div>
                  <div class="text">很不错，名字我们也很中意，谢谢了。会介绍给朋友的。</div>
                </li>
                <li>
                  <div class="top-text">
                    <label>订单号：CS50***69955</label>
                  </div>
                  <div class="text">起的名字很好，不俗气，也很清新，很有个性！</div>
                </li>
              </ul>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="bottom"></div>
    </div>-->
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <img src="/Public/Home/picture/index_24.png" /> </div>
      </div>
      <div class="section problem" name='problem' id='problem'>
        <dl>
          <dt>你们是专业正规起名公司吗？如何相信你们？</dt>
          <dd>
            <p>我公司成立8年多，是中国周易协会官方认证的起名网站，我们的起名大师专注起名30年，独创“八字大运” “未来运势预测” “老师人工筛选” “五行助运”综合起名服务，不但好听好记，更能助运旺福！周易起名网拥有“中华人民共和国ICP经营许可证”的在线起名网站，独创云计算起名。</p>
            <p>名字不满意怎么办？<br/>
              在我们这里起名不满意率只有千分之二，原因大多是因为操作不熟练、需求不明确、追求满分造成的。如果您有疑问请及时联系我们客服，我们一定能完美解决您所提出的问题，争取满意百分之百。</p>
          </dd>
        </dl>
        <dl>
          <dt>付款后多久可以得到起名结果？</dt>
          <dd>
            <p>马上可以获得起名结果，下单付款后马上就可以进入订单结果页面选名，一般几分钟即可选到心仪的美名。</p>
            <p>宝宝八字的五行，是缺什么就补什么吗？<br/>
              不是。需要区别对待，精确分析，真正做到“需要什么，则补什么”。否则就是简单加减，补救容易失误。</p>
          </dd>
        </dl>
		        <dl>
          <dt>名字的笔画五格评分越高越好吗？</dt>
          <dd>
            <p>不对。好名字首要考虑八字五行是否助运、音形义好不好，然后再参考笔画五格评分。</p>
            <p>备选名考虑生肖部首宜忌吗？<br/>
              生肖起名就是小学生水平，我们知道生肖是年份的代表，但是月、日、时，都没考虑，怎么可能准呢？稍微聪明点的人，想一下就知道了。</p>
          </dd>
        </dl>
		        <dl>
          <dt>女性可以使用带有“孤寡运”数理暗示的名字吗？</dt>
          <dd>
            <p>如果八字里面带有孤寡信息，应避免使用带有“孤寡运”数理暗示的名字。如果八字没有孤寡信息，则可以放心使用。</p>
            <p>取了好名字是否就意味着高枕无忧了？<br/>
              好名+好命=锦上添花；好名+坏命=雪中送炭；坏名+好命=有心无力；坏名+坏命=落井下石。名字的作用力不容忽视，也不能过分依赖。</p>
          </dd>

      </div>
      <div class="bottom"></div>
    </div>
  </div>
   <!--评论、问题结束 -->

</div>
<script>
$(function(){
	// $.get('/sm/tj',{_d:(+new Date())},function(d){
	// 	$("#tjs").text(d)
	// });

	// var calendar1 = new lCalendar().init('#birthday');

	$(".btn-raido").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		$(this).parent().find("input").val($(this).attr("data-val"));
	});

	for( var i = 0 ; i < 24 ; i++ ){
		$("select.hour").append("<option value='" + i + "'>" + i + "</option>")
	}
	for( var i = 0 ; i < 60 ; i++ ){
		$("select.minutes").append("<option value='" + i + "'>" + i + "</option>")
	}

/*	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		autoplay: 5000,
		loop: true
	});
	swiper.startAutoplay();
	loadxing(0);*/


	/*
	 * 姓名选择
	 * */
	$("input.username").click(function(){
		$(".surname-wrap").slideDown();
	});

	/*
	 *姓名选择框关闭
	 * */
	$(".surname-wrap .top-box .right-btn .close").click(function(){
		$(".surname-wrap").slideUp();
	});

	/*
	 *姓名选择框清空
	 * */
	$(".surname-wrap .top-box .right-btn .empty").click(function(){
		$("input.username").val("");
	});

	/*
	 *姓氏筛选
	 * */
	$(".common-name ul li").click(function(){
		loadxing($(this).text().toLowerCase().toString());
	});

	/*
	 * 姓名选择
	 * */
	$("ul.surname-item").on("click","li",function(){
		$("input.username").val($(this).text());
		$(".surname-wrap").slideUp();
	});

	/*
	 * 右侧悬浮点击
	 * */
	$(".right-float ul li").click(function(){
		$("html,body").animate({
			scrollTop: $($(this).attr("data-dom")).offset().top - 88
		},500);
	});

	var offset = $(".right-float").offset().top;
	$(window).scroll(function() {
		$(".right-float").stop().animate({
			"top": $(window).scrollTop() + offset
		},500);
	});


	$(".jump-form").click(function(){
		$("html,body").animate({
			scrollTop: $(".place-order").offset().top - 88
		},500);
	});


	$("#form").submit(function(){
		var data = {};
		$($(this).serializeArray()).each(function(){
			data[this.name]=this.value;
		});
		if( data.name == '' || data.name == undefined ){
			$("input.username").addClass("shake");
			setTimeout(function(){
				$("input.username").removeClass("shake");
			},750);
			return false;
		}
		if( data.birthday == '' || data.birthday == undefined ){
			$("input.Js_date").addClass("shake");
			setTimeout(function(){
				$("input.Js_date").removeClass("shake");
			},750);
			return false;
		}
		data.xing= data.name;
		data.phone = (+new Date()) + "" + getRandomInt(1000,9999);
		data.ver="";

		location.href = "<?php echo U('order/add');?>?" + $.param(data);

		return false;
	});


});

function getRandomInt(min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min)) + min;
}
</script>

<!-- 右侧悬浮 -->
<div class="right-float">
  <ul>
    <li data-dom=".why-select"><a href="javascript:;">起名优势</a></li>
    <li data-dom=".problem"><a href="javascript:;">常见问题</a></li>
    <li data-dom=".evaluate"><a href="javascript:;">客户好评</a></li>
    <li data-dom=".place-order"><a href="javascript:;">开始起名</a></li>
    <li ><a href="<?php echo U('order/pchistory');?>">历史订单</a></li>
  </ul>
</div>
<!--
<script src='/Public/Home/js/rightfix.js'></script>
-->
<!--右侧联系方式 START-->
<style>
    .fix_rightx { width: 125px;position: fixed;top: 63% ;right:0; text-align: center;background:#E44D4D }
    .fix_rightx .a{background: #E44D4D;height: 45px;width: 125px;display: block;color: #fff;line-height: 45px;font-size: 16px;}
</style>
<div class="fix_rightx" >
    <a href="" class="a" style="height:70px;text-align:center;line-height:30px">客服电话<br><?php echo C('webphone');?>
      <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('webqq');?>&site=qq&menu=yes">
        <img border="0" src="http://wpa.qq.com/pa?p=2:3477281956:53" alt="点击这里给我发消息" title="点击这里给我发消息"/>
      </a>
    </a>
</div>
<!--右侧联系方式 END-->
<div class="foot">

  <ul>
     <a href="index.php">
    <li><img src="/images/home.png"><br>网站首页</li></a>
     <a href="#place-order">
    <li><img src="/images/body.png"><br>立即起名</li></a>
   <a href="order/pchistory.html">
    <li><img src="/images/plya.png"><br>订单查询</li></a>
     <a  id="a1" href="#" οnclick=""><li id="yjcopy"><img src="/images/weixin.png" ><br>微信咨询</li></a>

  </ul>
</div>
<!-- 此处输入你的微信号码 -->
<b style="color:#f5cc26;font-size:0px;" id="yq">aiqiming58</b>
<script>
  $(function(){
/*给标签添加跳转路径*/
          var url = "weixin://";
         $('#a1').attr('href',url)
         var lj = "PIWI_SUBMIT.Weixin_Open()";
         $('#a1').attr('onclick',lj);
 /*封装函数复制内容*/
 function copyArticle99(event){
        const range = document.createRange();
        range.selectNode(document.getElementById('yq'));
        console.log(range.selectNode(document.getElementById('yq')))
        const selection = window.getSelection();
        if(selection.rangeCount > 0) selection.removeAllRanges();
        selection.addRange(range);
/*复制成功的提示*/
        document.execCommand('copy');
        layer.alert('已复制好微信号，可打开微信粘贴加好友', {icon: 6});
    }

 document.getElementById('yjcopy').addEventListener('click', copyArticle99, false);
});
</script>


    <div style="display:none"> <script src="/Public/Home/js/z_stat.js" language="JavaScript"></script> </div>
    <div id="footer">
      <div class="min-width">
        <p> <?php echo C('webpccopy');?> </p>
      </div>
    </div>
    <script type="text/javascript" src="/Public/Home/js/my.js"></script>

  </body>
</html>