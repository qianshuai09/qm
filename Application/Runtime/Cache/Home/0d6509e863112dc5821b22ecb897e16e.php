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
      <div class="min-width1">
        <div class="logo"> <a href="#"><img src="/Public/Home/picture/logo.png" /></a> </div>
        <div class="text"> <img src="/Public/Home/picture/index_01.png" /> </div>
        <div class="phone"> </div>
      </div>
    </div>
    <div id="nav">
      <div class="min-width1">
        <ul>
            <li><a href="<?php echo C('weburl');?>">首页</a></li>
            <li><a href="<?php echo C('weburl');?>#evaluate">起名优势</a></li>
            <li><a href="<?php echo C('weburl');?>#place-order">马上起名</a></li>
            <li><a href="<?php echo C('weburl');?>#problem">常见问答</a></li>
            <li><a href="<?php echo C('weburl');?>#evaluate">客户评价</a></li>
            <li><a  href="<?php echo U('order/pchistory');?>">历史订单</a></li>
        </ul>
      </div>
    </div>

    
<script src="/Public/Home/js/cookie.js"></script>
<link type="text/css" href="./index_files/zqf1991.css" rel="stylesheet">
<div class="yf_008">
  <div class="yf_009">
      <div class="yf_010">
        <ul>
          <li>易认易念易写，好听好看好记，无歧意谐音</li>
          <li>五格三才大吉，五行生肖都符合，字义吉祥</li>
          <li>字音好，读起来要响亮；字义好，寓意深刻</li>
          <li>大师手工起的名字在网上打分都有95分以上</li></ul>
      </div>
    <div class="yf_011">
        <img src="/Public/Home/picture/ban_014.png">
    </div>
    <a href="/zhouyi3.php#main">
      <div class="yf_012">58阳生起名网参考国学经典，易经、诗经、唐诗宋词著作起名</div></a>
  </div>
</div>
<!-- 头部结束 -->
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="renderer" content="webkit">
<meta name="renderer" content="webkit"><!-- 避免IE使用兼容模式 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<div id="container">
  <!-- 在线下单 -->
  <div class="index-section place-order" name='place-order' id='place-order'>
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <img src="/Public/Home/images/113.png" /> </div>
      </div>
      <div class="section3">
        <div class="step-wrap">
          <div style="padding: 10px 0;"><h2>为您节省 学习起名知识所需的大量时间</h2></div>
        </div>
		<script>
			function csztfun(){
				$(".shichen").show();

				$(".gd_wz").hide();
				$(".srycq").html("生日");
				$("#gender").val(1);

				$(".gd_nan").addClass("active");
				$(".gd_nv").removeClass("active");
				$(".gd_wz").removeClass("active");

			}
			function csztfun1(){
				$(".shichen").hide();

				$(".gd_wz").show();
				$(".srycq").html("产期");
				$("#gender").val(-1);

				$(".gd_nan").removeClass("active");
				$(".gd_nv").removeClass("active");
				$(".gd_wz").addClass("active");

			}
		</script>
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
					<select class="hour" name="b_input" style="width:57px;">
					  <option value="0">公历</option>
					  <option value="1">农历</option>
					</select>
                   </div>

                    <div class="time1">
					<select class="hour input" name="birthday" style="width: 80px !important;">
					  <?php if(is_array($years)): $i = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo); ?>" <?php if($vo ==date('Y') ): ?>selected="selected"<?php endif; ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>


					</select>
                  <span>年</span> </div>
                  <div class="time1">
					<select class="hour " name="birthm">
					  <!--<option value="0">--</option>-->
					  <!--<option value="1" selected="selected">1</option>-->
					  <!--<option value="2">2</option>-->
					  <!--<option value="3">3</option>-->
					  <!--<option value="4">4</option>-->
					  <!--<option value="5">5</option>-->
					  <!--<option value="6">6</option>-->
					  <!--<option value="7">7</option>-->
					  <!--<option value="8">8</option>-->
					  <!--<option value="9">9</option>-->
					  <!--<option value="10">10</option>-->
					  <!--<option value="11">11</option>-->
					  <!--<option value="12">12</option>-->
					  <?php $__FOR_START_1906402617__=1;$__FOR_END_1906402617__=13;for($i=$__FOR_START_1906402617__;$i < $__FOR_END_1906402617__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($i ==date('m')): ?>selected="selected"<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
					</select>
                  <span>月</span> </div>
                  <div class="time1">
					<select class="hour" name="birthd">
					  <?php $__FOR_START_197186530__=1;$__FOR_END_197186530__=32;for($i=$__FOR_START_197186530__;$i < $__FOR_END_197186530__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($i ==date('d') ): ?>selected="selected"<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
					</select>
                  <span>日</span> </div>
				  <div class="time1">
					<select class="hour" name="birthtime" style="width:60px;">
					  <option value="0">未知</option>
					  <?php $__FOR_START_2096696630__=0;$__FOR_END_2096696630__=24;for($i=$__FOR_START_2096696630__;$i < $__FOR_END_2096696630__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($i ==date('h') ): ?>selected="selected"<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
					</select>

                  <span>时</span> </div>
                <div class="time1">
					<select class="minutes" name="birthmin" style="width:60px;">
					  <option value="0">未知</option>
					   <?php $__FOR_START_53982502__=0;$__FOR_END_53982502__=60;for($i=$__FOR_START_53982502__;$i < $__FOR_END_53982502__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if($i ==date('i') ): ?>selected="selected"<?php endif; ?>><?php echo ($i); ?></option><?php } ?>
					</select>
                  <span>分</span> </div>
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
            <li class="text"> <span>已有 <?php echo time()-1570000000?>人选择58阳生起名网，好评率高达99.9%</span> </li>
          </ul>
        </form>
      </div>
    </div>
  </div>
  <!-- 在线下单结束 -->
<div class="yf6">
<div class="yf_6" id="zy">
  <div>
    <a href="#place-order">
      <img src="/Public/Home/images/yf_026.png"></a>
  </div>
  <div>
    <a href="#place-order">
      <img src="/Public/Home/images/yf_027.png"></a>
  </div>
  <div>
    <a href="#place-order">
      <img src="/Public/Home/images/yf_028.png"></a>
  </div>
  <div>
    <a href="#place-order">
      <img src="/Public/Home/images/yf_029.png"></a>
  </div>
  <div>
    <a href="#place-order">
      <img src="/Public/Home/images/yf_030.png"></a>
  </div>
  <div>
    <a href="#place-order">
      <img src="/Public/Home/images/yf_031.png"></a>
  </div>
  <div>
    <a href="#place-order">
      <img src="/Public/Home/images/yf_032.png"></a>
  </div>
  <div>
    <a href="#place-order">
      <img src="/Public/Home/images/yf_033.png"></a>
  </div>
</div></div>
<!-- 起名案例 -->
<div class="bannernew" style=" text-align:center;">
<div class="bannernew" style="background: url(/Public/Home/images/yf_035.png) no-repeat left top;">
<div class="bannernew" style="background: url(/Public/Home/images/yf_036.png) no-repeat center bottom;">
<div class="qm_a_01" id="anli">
			<div class="qm_a_02">
			</div>
			<div class="qm_a_04">
							<span><a href="#place-order" >点此下单起名</a></span>
				<h2 style="text-align:left">男宝宝起名案例</h2>
		  </div>
			<div class="qm_a_05">
				<ul>
					<li data-h2="王启帆" data-q="开导，启动，象征有前途，有希望。从生辰八字上看，名字中需有木相助，启字的五行属性为木，有利八字。" data-f="象征乘风前进，一帆风顺。来自唐诗：杜甫 所著 《横吹曲辞。后出塞五首》 云帆转辽海，粳稻来东吴。">
						<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/qm_01_009.jpg">
						<h2>王启帆</h2>
						<span>Winston</span>
						<em>赞 &nbsp;303456</em>
					</li>
					<li data-h2="周俊廷" data-q="一般包含三个方面的含义：一指才智过人，高尚，杰出，卓越；另一指容貌俊美，再则指气势博大。
" data-f="从八字上看，名字中需有火相助，廷字的五行属性为火，有利八字。
来自宋词：杜安世 所著 《玉楼春》汉廷起草旧郎官。">
						<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/qm_01_011.jpg">
						<h2>周俊廷</h2>
						<span>Hassan</span>
						<em>赞 &nbsp;200988</em>
					</li>
					<li data-h2="田展旭" data-q="展望、生机、力量、开朗。从生辰八字上看，名字中需有火相助，展字的五行属性为火，有利八字。" data-f="指光明，早晨初升的太阳和光亮。来自唐诗：韦应物 所著 《乐府杂曲，鼓吹曲辞，芳树》 风条洒馀霭，露叶承新旭。">
						<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/qm_01_012.jpg">
						<h2>田展旭</h2>
						<span>Tymon</span>
						<em>赞 &nbsp;203456</em>
					</li>
					<li data-h2="徐浩然" data-q="浩瀚、广大、广阔、远大之义。从生辰八字上看，名字中需有水相助，浩字的五行属性为水，有利八字。" data-f="信守、明白、照耀，意义优美。来自唐诗：李世民 所著 《帝京篇十首》 以兹游观极，悠然独长想。">
						<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/t1.jpg">
						<h2>徐浩然</h2>
						<span>Tymon</span>
						<em>赞 &nbsp;153456</em>
					</li>
				</ul>
			  <div class="qm_zs">
					<h3>用字的意义：</h3>
					<span>王启帆</span>
					<p><i>启</i>开导，启动，象征有前途，有希望。从生辰八字上看，名字中需有木相助，启字的五行属性为木，有利八字。</p>
					<p><i>帆</i>象征乘风前进，一帆风顺。来自唐诗：杜甫 所著 《横吹曲辞。后出塞五首》 云帆转辽海，粳稻来东吴。</p>
			    <a href="#place-order" >下单起名</a>				</div>
			</div>

			<div class="qm_a_04">
					<span><a href="#place-order" >点此下单起名</a></span>
				<h2 style="text-align:left">女宝宝起名案例</h2>
		  </div>
			<div class="qm_a_05">
				<ul>
					<li data-h2="唐艺芯" data-q="才能，技能，艺术。从生肖上看，生肖为猪，名字中应有艹部首为吉，艺的部首为艹，有利生肖。" data-f="来自唐诗：李世民 所著 《咏司马彪续汉志》 文囿雕奇彩，艺门蕴深致。从八字上看，芯字的五行属性为木，有利八字。">
						<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/qm_01_019.jpg">
						<h2>唐艺芯</h2>
						<span>Belle</span>
						<em>赞 &nbsp;103956</em>
					</li>
					<li data-h2="安禹诺" data-q="大禹、才能、智慧、聪明。来自宋词：柳永 所著 《送征衣》彤庭舜张大乐，禹会群方。" data-f="允许、诺许、同意、承诺，意义优美。从八字上看，名字中需有火相助，诺字的五行属性为火,有利八字。">
						<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/qm_01_020.jpg">
						<h2>安禹诺</h2>
						<span>Tobey</span>
						<em>赞 &nbsp;20988</em>
					</li>
					<li data-h2="方若熹" data-q="气质、美好、文雅、风度。从八字上看，名字中需有木相助，若字的五行属性为木，有利八字。" data-f="指亮、光明，字义优美。来自宋词：杨万里 所著 《归去来兮引》试问征夫前路，晨光小，恨熹微。">
					<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/qm_01_021.jpg">
						<h2>方若熹</h2>
						<span>Sylvia</span>
						<em>赞 &nbsp;183456</em>
					</li>
					<li data-h2="赵悦竹" data-q="指喜悦、高兴、愉快、舒畅、顺利。来自唐诗：李世民 所著 《帝京篇十首》 去兹郑卫声，雅音方可悦。" data-f="气节、正直、淡雅、高雅，意义优美。来自唐诗：李世民 所著 《元日》 霜戟列丹陛，丝竹韵长廊。">
					<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/t2.jpg">
						<h2>赵悦竹</h2>
						<span>Tymon</span>
						<em>赞 &nbsp;130005</em>
					</li>
				</ul>
			  <div class="qm_zs">
					<h3>用字的意义：</h3>
					<span>唐艺芯</span>
					<p><i>艺</i>才能，技能，艺术。从生肖上看，生肖为猪，名字中应有艹部首为吉，艺的部首为艹，有利生肖。</p>
					<p><i>芯</i>来自唐诗：李世民 所著 《咏司马彪续汉志》 文囿雕奇彩，艺门蕴深致。从八字上看，芯字的五行属性为木，有利八字。</p>
			    <a href="#qm" >下单起名</a>				</div>
			</div>

			<div class="qm_a_04">
				<span><a href="#place-order" >申请大师改名</a></span>
				<h2 style="text-align:left">个人改名字案例</h2>
		  </div>
			<div class="qm_a_05">
				<ul>
					<li data-h2="杨萧语" data-q="从八字上看，名字中需有木相助，萧字属性为木，有利八字。来自唐诗：李世民 所著 《咏风》 萧条起关塞，摇飏下蓬瀛。" data-f="出语成章、文思敏捷、意义优美。来自宋词：柳永 所著 《黄莺儿》观露湿缕金衣，叶映如簧语。">
					<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/qm_01_029.jpg">
						<h2>杨萧语</h2>
						<span>Belle</span>
						<em>赞 &nbsp;103456</em>
					</li>
					<li data-h2="赵玺程" data-q="玉玺、印章、贵重。从生肖上看，生肖为马，名字中应有玉部首为吉，玺的部首为玉，且玺字五行有利八字。" data-f="启程、鹏程，意义优美。从八字上看，名字中需有火相助，程字的五行属性为木，有利八字。">
				<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/qm_01_030.jpg">
						<h2>赵玺程</h2>
						<span>Tobey</span>
						<em>赞 &nbsp;11988</em>
					</li>
					<li data-h2="张宸赫" data-q="宸系男子名常用字，能较好的与姓氏搭配。从八字上看，名字中有补缺失五行金较好，宸字五行为金，有利八字。" data-f="显耀、显盛、盛大、赫赫之光，意义优美。来自宋词：张伯端 所著 《西江月》内有天然真火，炉中赫赫长红。">
	<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/qm_01_031.jpg">
						<h2>张宸赫</h2>
						<span>Sylvia</span>
						<em>赞 &nbsp;353456</em>
					</li>
					<li data-h2="甘云霆" data-q="云霄，字义优美。来自唐诗：李世民 所著 《帝京篇十首》 云日隐层阙，风烟出绮疏。" data-f="霆一般指威严，威猛，名声，如雷霆万钧。来自宋词：黄庭坚 所著 《木兰花令》东君未试雷霆手。">
						<div style="display: none;"><a href="#place-order" ></a></div>
						<img src="images/zqf2017/t3.jpg">
						<h2>甘云霆</h2>
						<span>Sylvia</span>
						<em>赞 &nbsp;373456</em>
					</li>
				</ul>
			  <div class="qm_zs">
					<h3>用字的意义：</h3>
					<span>杨萧语</span>
					<p><i>萧</i>从八字上看，名字中需有木相助，萧字五行为木，有利八字。来自唐诗：李世民 所著 《咏风》 萧条起关塞，摇飏下蓬瀛。</p>
					<p><i>语</i>出语成章、文思敏捷、意义优美。来自宋词：柳永 所著 《黄莺儿》观露湿缕金衣，叶映如簧语。</p>
			    <a href="#qm" >下单起名</a>				</div>
			</div><div class="dibud"></div>
		</div></div></div></div></div>
<script>
			$(".qm_a_05 li").mouseover(function(){
				$(this).parent().parent().find('li').find('div').hide();
				$(this).find('div').show();
				var zs = $(this).parent().parent('.qm_a_05').find('.qm_zs');
				var n = '<i>' + $(this).data('h2').substring(1,2) + '</i>' + $(this).data('q');
				var m = '<i>' + $(this).data('h2').substring(2,3) + '</i>' + $(this).data('f');
				var url = $(this).find('div').find('a').attr('href');
				zs.find('span').html($(this).data('h2'));
				zs.find('p:first').html(n);
				zs.find('p:last').html(m);
				zs.find('a').attr('href',url);

			})
				var arr_wx=['郭','王','刘','吕','李','费','孙','蒋','杨','许','张','雷','赵','钱','周','吴','郑','冯','陈','褚','卫','沈','韩','杨','朱','秦','尤','何','魏'];
		var arr_xs=['先生','女士'];
		var i = 0;
		$(document).ready(function(){
			function xs(){
				i++;
				if(i == 36){
					var wx_index = Math.floor((Math.random()*arr_wx.length));
					var sx_index = Math.floor((Math.random()*arr_xs.length));
					var sj_index = Math.floor((Math.random()*15));
					var stxlwx = arr_wx[wx_index] + arr_xs[sx_index];
					$(".jw").html(sj_index+ '分钟前　'+stxlwx+'下单了58阳生八字起名　<a href="/zhouyi32xb.php#main">点此下单</a>');
					$(".jw").show();
					i = 0;
				}
				if(i == 18){
					$(".jw").hide();
				}
			}
			setInterval(xs,500);
		  });
		</script>
		<div class="img_5a">
			<img src="./index_files/img_166.jpg">
		</div>
<script>
$(function(){
	function xyliht(){
		$('.wp4_t li.xytp1').each(function(){
			var xytht=$(this).next('li').height();
			$(this).css('height', xytht+'px');
		});
	}
	xyliht();
	$(window).resize(function() {
		xyliht();
	});
});
</script>
		  <div class="wrap_4">
    <ul>
      <li>
        <div class="wrap_4_list">
          <ul class="wp4_t"><li class="xytp2"><a href="javascript:void(0);" target="_blank"><img src="./index_files/M1.jpg" border="0"><div class="t"><span>王启帆<br>Winston</span><em>赞 103456</em></div></a></li>
            <li class="xytp2"><a href="javascript:void(0);" target="_blank"><img src="./index_files/M2.jpg" border="0"><div class="t"><span>周俊廷<br>Hassan</span><em>赞 20988</em></div></a></li>
            <li class="xytp2"><a href="javascript:void(0);" target="_blank"><img src="./index_files/M3.jpg" border="0"><div class="t"><span>田展旭<br>Tymon</span><em>赞 203456</em></div></a></li>
			<li class="xytp2"><a href="javascript:void(0);" target="_blank"><img src="./index_files/M4.jpg" border="0"><div class="t"><span>唐艺芯<br>Belle</span><em>赞 340056</em></div></a></li>
            <li class="xytp2"><a href="javascript:void(0);" target="_blank"><img src="./index_files/M5.jpg" border="0"><div class="t"><span>安禹诺<br>Miette</span><em>赞 11258</em></div></a></li>
            <li class="xytp2"><a href="javascript:void(0);" target="_blank"><img src="./index_files/M6.jpg" border="0"><div class="t"><span>方玥熹<br>Tobey</span><em>赞 526637</em></div></a></li>
			<li class="xytp2"><a href="javascript:void(0);" target="_blank"><img src="./index_files/M7.jpg" border="0"><div class="t"><span>张宸赫<br>Kelvin</span><em>赞 360987</em></div></a></li>
            <li class="xytp2"><a href="javascript:void(0);" target="_blank"><img src="./index_files/M8.jpg" border="0"><div class="t"><span>杨萧语<br>Tina</span><em>赞 253689</em></div></a></li>
          </ul>
        </div>
      </li>


    </ul>
  </div>

  <div class="img_5a">
			<img src="./index_files/img_ryjb.png">
		</div>
		

  <!-- 评论、问题-->
  <div class=" evaluate" name='evaluate' id='evaluate'>

<div style="background: url(/Public/Home/images/yf_048.jpg) repeat left top;overflow: hidden;">
	<div class="hprc" id="pj">
	  <div class="w1000">
	  <div style="text-align: center;">
		<img src="/Public/Home/images/yf_049.png" style="margin: 50px 0;"></div>
		<div class="l">
		  <h1>客户评价<span><img src="/Public/Home/picture/x.png"><img src="/Public/Home/picture/x.png"><img src="/Public/Home/picture/x.png"><img src="/Public/Home/picture/x.png"><img src="/Public/Home/picture/x.png"></span></h1>
		  <div class="pj_title"> <span href="">名字很好(980)</span> <span href="">名字好听(850)</span> <span href="">分析准确(740)</span> <span href="">态度很好(680)</span> <span href="">寓意深刻(520)</span> <span href="">大气响亮(490)</span> <span href="">打分很高(370)</span> <span href="">专业可信(220)</span> </div>
		  <div class="hd" id="demoxj">
			<ul>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5055 评论：</span></li>
			  <li>这家网站起名考虑得很全面，国学文化结合得很好，强烈推荐</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2263 评论：</span></li>
			  <li>分析很专业，起到了很多好名字，目前还不知道选择哪个名字。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****0123 评论：</span></li>
			  <li>朋友介绍过来的，果然是很棒的起名网站，起的名字很有内涵。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****0189 评论：</span></li>
			  <li>这家起名网站很专业，帮我起了好多名字，最终选到了满意的好名字，</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2565 评论：</span></li>
			  <li>不愧是中国权威的起名网站，起的名字很大气，好听又时尚。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2333 评论：</span></li>
			  <li>还不错，起的名字很满意，老公很喜欢，五星好评！</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5562 评论：</span></li>
			  <li>大师起名很专业，强烈推荐，会介绍更多朋友过来的</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2356 评论：</span></li>
			  <li>我哥推荐的，果然不负所望，名字非常满意，在此感谢大师付出。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5566 评论：</span></li>
			  <li> 宝宝出生，急需名字办理出生证，没想到这么快就起了名字给我选择</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****4489 评论：</span></li>
			  <li>名字很好，不俗气，听起来就很有气质！这家起名网站值得推荐</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5689 评论：</span></li>
			  <li>起名很权威，好多名字都是出自楚辞诗经</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****1256 评论：</span></li>
			  <li>起到的好名字太多了，现在还没有确定选择哪个名字</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****8942 评论：</span></li>
			  <li>之前找了好几家都没有起到满意的名字，最后找宗秋山人老师起到了</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2365 评论：</span></li>
			  <li>一个同事介绍来的，给宝宝取的 家人都满意 很专业</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****1256 评论：</span></li>
			  <li>师傅很有耐心，不厌其烦的帮我分析名字，服务态度值得称赞</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5986 评论：</span></li>
			  <li>很不错，名字我们也很中意，谢谢了，会介绍给朋友的。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5698 评论：</span></li>
			  <li>起的名字很好，不俗气，也很清新，很有个性</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2354 评论：</span></li>
			  <li>谢谢大师给我优先安排起名，从10个名字中选了两个,家人都很满意</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****0101 评论：</span></li>
			  <li>名字很时尚，很有内涵，不愧是老秀才，可以起这么多好名字</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****0145 评论：</span></li>
			  <li>开始看价格很便宜，担心起的名字不好，没想到名字这么称心！</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5055 评论：</span></li>
			  <li>师傅起名考虑得很全面，和古文化结合得很好，强烈推荐</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2263 评论：</span></li>
			  <li>分析很专业，起到了很多好名字，目前还不知道选择哪个名字。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****0123 评论：</span></li>
			  <li>朋友介绍过来的，果然是很棒的起名网站，谢谢师傅！</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****0189 评论：</span></li>
			  <li>这家起名网站很专业，最终选到了满意的好名字，</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2565 评论：</span></li>
			  <li>不愧是中国权威的起名网站，起的名字很高大上</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2333 评论：</span></li>
			  <li>还不错，起的名字很满意，老公很喜欢，五星好评！</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5562 评论：</span></li>
			  <li>谢谢师傅给公司起的名字，股东们都很喜欢</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2356 评论：</span></li>
			  <li>我姐说你们很专业，还正是，不愧是书法行家，字就是漂亮</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5566 评论：</span></li>
			  <li>谢谢师傅的手稿，字很漂亮，会好好收藏。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****4489 评论：</span></li>
			  <li>名字很好，不俗气，听起来就很有气质！这家起名网站值得推荐</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5689 评论：</span></li>
			  <li>宗秋山人老师起名很有水平，很有文化内涵，果然与众不同。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****1256 评论：</span></li>
			  <li>起到的好名字太多了，都是心仪的名字，晚上家人投票决定。</li>
			  <li><span>订单号</span><span>2018*****8942 评论：</span></li>
			  <li>之前找了好几家起名网站，最后找58阳生起名网起到满意的名字。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2365 评论：</span></li>
			  <li>一个朋友介绍来的，给宝宝取的 家人都满意 很专业</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****1256 评论：</span></li>
			  <li>大师很有耐心，不厌其烦的帮我解释，服务态度值得称赞</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5986 评论：</span></li>
			  <li>很不错，名字我们也很中意，谢谢了，下次我妹小孩还找你们。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****5698 评论：</span></li>
			  <li>起的名字很好，高大上，很有个性，我挑了个满分的，呵呵。</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****2354 评论：</span></li>
			  <li>出结果很快，谢谢大师给我优先安排，老公也很满意</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****0101 评论：</span></li>
			  <li>名字合八字又好听，真是不错，强烈推荐！</li>
			  <li><span>订单号</span><span><?php echo date('Y');?>*****0145 评论：</span></li>
			  <li>不错，名字起的果然不错，谢谢大师用心了。</li>
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
		  <h1>最新资讯</h1>
		  <div id="nxt">
			<ul>
			  <li><script>getBeforeDate()</script> </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38084  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23876  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35087  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23064  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****48211  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****21677  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****53868  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****48697  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****14973  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17576  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17827  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17568  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****65615  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****68261  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23006  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35087  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23064  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38084  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23876  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35087  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23064  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****48211  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****21677  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****53868  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****48697  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****14973  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17576  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17827  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17568  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****65615  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****68261  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23006  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35087  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23064  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38084  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23876  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35087  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23064  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****48211  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****21677  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****53868  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****48697  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****14973  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17576  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17827  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17568  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****65615  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****68261  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23006  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35087  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23064  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17568  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****65615  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****68261  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23006  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35067  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23068  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38048  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17568  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****65615  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****68261  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23006  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35067  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23068  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38048  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****17568  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****65615  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****68261  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38046  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23006  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****35067  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****23068  *9元 </li>
			  <li>58阳生起名 <?php echo date('Y');?>*****38048  *9元 </li>
			</ul>
		  </div>
		  <div class="cx">
			  <input type="text" name="dingdanhao"  placeholder="请输入您17位数的订单号"/>
			  <button onClick="getOrder()" type="button">订单查询</button>
		  </div>
		</div>
	  </div>
	</div>
</div>


<script type="text/javascript" src="/Public/Home/js/scroll_s.js" ></script>
<script type="text/javascript">

function in_array(search,array){
    for(var i in array){
        if(array[i]==search){
            return true;
        }
    }
    return false;
}

function getOrder(){
	var order = $("input[name='dingdanhao']").val();
	if(order==""){
		alert("请输入完整的订单号！");
		return;
	}
	$.post("<?php echo U('order/check');?>",{"orderno":order},function(data){
		//var ret = eval("("+data+")");
		if(data=="fail"){
			alert("订单不存在！");
		}
		else
		{
			window.location.href="/order/mlist/orderno/"+order;
		}
	});
}
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


    <div class="min-width index-section  jump-form">
      <div class="tp">
        <div class="top-title"> <img src="/Public/Home/picture/index_24.png" /> </div>
      </div>
      <div class="section problem" name='problem' id='problem'>
        <dl>
		 <dt>名字不满意怎么办？</dt>
		  <dd>
          <p>在我们这里起名不满意率只有千分之二，原因大多是因为操作不熟练、需求不明确、追求满分造成的。 如果您有疑问请及时联系宝宝起名网客服，我们一定能完美解决您所提出的问题，争取满意百分之百。</p>
        </dd>
        </dl>
		<dl>
		  <dt>付款后多久可以得到起名结果？</dt>
		  <dd>
           <p>马上可以获得起名结果，下单付款后马上就可以进入订单结果页面选名，一般几分钟即可选到心仪的美名。</p>
	      </dd>
         </dl>
		 <dl>
          <dt>付款后去哪里查询起名结果？</dt>
          <dd>
            <p>支付成功后会自动跳转到起名结果页面，也可以在订单查询里面查到，如果没有收到或者其他问题请联系在线客服。</p>
          </dd>
        </dl>
		<dl>
          <dt>宝宝八字的五行，是缺什么就补什么吗？</dt>
          <dd>
            <p>不是。需要区别对待，精确分析，真正做到“需要什么，则补什么”。否则就是简单加减，补救容易失误。</p>
          </dd>
        </dl>
		<dl>
		  <dt>现在网上起名的机构那么多，不知道选择那家才好？</dt>
		   <dd>
          <p>这就要看你自己辨别能力，我们也不能说其它起名机构怎么样？但我们是专业从事起名服务工作！为数百万人提供过起名服务，业界名誉卓著，多年来凭借严谨的治学态度、渊博的文学知识、精确的分析定位、热忱的售后服务深得广大客户的肯定。</p>
          </dd>
         </dl>
        </div>

      <div class="bottom"></div>
    </div>
  </div>
   <!--评论、问题结束 -->

</div>
<script>
$(function(){

	$(".btn-raido").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		$(this).parent().find("input").val($(this).attr("data-val"));
	});
	/*$.get('/sm/tj',{_d:(+new Date())},function(d){
		$("#tjs").text(d)
	});

	var calendar1 = new lCalendar().init('#birthday');

	$(".btn-raido").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		$(this).parent().find("input").val($(this).attr("data-val"));
	});

	for( var i = 0 ; i < 24 ; i++ ){
		$("select.hour").append("<option value='" + i + "'>" + i + "</option>")
	}
	for( var i = 0 ; i < 60 ; i++ ){
		$("select.minutes").append("<option value='" + i + "'>" + i + "</option>")
	}*/

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

var allow1 = Array("时","卞","祁","贝","计","强","娄","昌","郁","万","奚","凤","云","汤","昝","经","贲","滑","翁","於","惠","羿","汲","邴","糜","松","富","牧","宓","蓬","仰","秋","仲","宫","暴","钭","祖","景","束","韶","蓟","宿","邰","从","鄂","索","咸","籍","屠","蒙","阴","鬱","胥","能","苍","双","莘","贡","劳","逄","扶","堵","宰","郦","卻","璩","桑","濮","寿","通","扈","冀","郏","农","别","庄","充","宦","慎","庾","终","暨","衡","步","都","耿","国","禄","殳","沃","越","夔","厍","勾","融","訾","那","空","乜","养","须","蒯","竺","益","俟","人","甫","冶","政","濮","淳","叔","屠","仲","轩","子","苑","习","酆","福","鞠","红","巢","亓","还","大","毋","闫","桓","主","丁","隋","皇","栾","亓","福","盖","桓","毋","巢","鞠","红","卜","刀","闫","卜","刀","肖","佘","力","刁","于","山","上","弓","弋","千","乞","士","兀","丌","王","孔","毛","文","方","牛","尤","尹","元","太","巴","公","亢","水","戈","仇","井","支","壬","付","石","占","古","田","白","甘","史","司","申","包","皮","左","右","丘","令","冉","央","平","丙","弘","母","仝","印","朱","伍","全","米","安","伊","吉","列","向","戎","伏","年","衣","危","羊","任","牟","百","曲","匡","光","后","共","老","同","守","再","李","吴","宋","杜","江","何","吕","余","谷","车","池","辛","呙","巫","成","冷","言","吾","利","况","希","汝","良","佟","岑","林","冼","卓","汪","金","武","孟","周","东","尚","季","明","杭","房","易","狄","长","念","岳","屈","居","艾","官","幸","沙","来","和","宗","禹","姜","纪","柯","施","俞","姚","查","段","封","韦","柳","侯","宣","帅","相","风","狐","柏","哈","南","马","唐","乌","高","洪","秦","班","凌","花","袁","夏","祝","芮","瓮","孙","敖","柴","桂","倪","殷","席","耿","晋","师","晏","容","徐","家","晁","姬","张","许","梁","苗","崔","商","康","胡","章","曹","浦","邢","麦","区","毕","粘","涂","常","鱼","寇","符","梅","苟","戚","尉","麻","茅","傅","黄","曾","邱","彭","阮","程","盛","邵","贺","童","辜","冯","荀","项","乔","荆","费","焦","喻","钮","嵇","闵","单","尧","凌","茹","斯","舒","植","杨","詹","荘","贾","虞","楚","路","雷","莫","湯","湛","温","涂","解","雍","廉","新","靳","郁","裘","赵","廖","连","郎","管","郝","赫","齐","华","熊","裴","荣","种","宁","台","郗","郜","闻","端","辅","甄","翟","臧","刘","叶","郭","葛","欧","樊","董","鲁","褚","万","乐","谈","卫","范","黎","厉","练","巩","陕","广","满","玛","慕","滕","墨","逯","陈","钱","赖","陆","潘","阎","鲍","蒲","穆","陶","霍","龙","卢","诸","燕","骆","游","蔡","谢","干","蒋","应","赛","阳","蔚","缪","邬","隆","戴","澹","临","襄","营","韩","邹","锺","魏","简","颜","储","瞿","济","阙","聂","隗","丰","礼","鄢","沈","严","罗","郑","邓","关","萧","谭","薛","薄","庞","迟","蓝","钟","窦","释","怀","阚","党","继","权","巍","饶","顾","铁","珑","苏","龚","邝","蔺","边","兰");
var allow2 = new Array("万俟","司马","上官","欧阳","夏侯","诸葛","闻人","东方","赫连","皇甫","尉迟","公羊","澹台","公冶","宗政","濮阳","淳于","单于","太叔","申屠","公孙","仲孙","轩辕","令狐","钟离","宇文","长孙","慕容","鲜于","闾丘","司徒","司空","丌官","司寇","仉督","子车","颛孙","端木","巫马","公西","漆雕","乐正","壤驷","公良","拓跋","夹谷","宰父","谷梁","晋楚","闫法","汝鄢","涂钦","段干","百里","东郭","南门","呼延","归海","羊舌","微生","岳帅","缑亢","况郈","有琴","梁丘","左丘","东门","西门","商牟","佘佴","伯赏","南宫","墨哈","谯笪","年爱","阳佟","第五","言福");
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
		var xing1 = data.name.substr(0,1);
		var xing2 = data.name.substr(0,2);
		if(!in_array(xing1,allow1) && data.name.length==1){
			alert('姓氏填写错误');
			$("input.username").addClass("shake");
			setTimeout(function(){
				$("input.username").removeClass("shake");
			},750);
			return false;
		}

		if(!in_array(xing2,allow2) && data.name.length==2){
			alert('姓氏填写错误');
			$("input.username").addClass("shake");
			setTimeout(function(){
				$("input.username").removeClass("shake");
			},750);
			return false;
		}

		if(data.name.length>2){
			alert('姓氏填写错误');
			$("input.username").addClass("shake");
			setTimeout(function(){
				$("input.username").removeClass("shake");
			},750);
			return false;
		}

		var reg=/^[\u2E80-\u9FFF]+$/;
		if(!reg.test(data.name)){
			alert('姓氏填写错误');
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
</div>
<!--
<script src='/Public/Home/js/rightfix.js'></script>
-->
<!--右侧联系方式 START-->
<style>
    .fix_rightx { width: 125px;position: fixed;top: 63% ;right:0; text-align: center;background:#E44D4D }
    .fix_rightx .a{background: #E44D4D;height: 45px;width: 125px;display: block;color: #fff;line-height: 45px;font-size: 16px;}
</style>

<!--右侧联系方式 END-->
<style type="text/css">
  	.kefuzaixian{width:130px;background:#000; font-weight:bold;;padding:4px;position:fixed;right:0;top:50%;margin-top:-175px;}
  	.kefuzaixian h2{font-size:20px;text-align:center;color:#FFF508;letter-spacing:4px;}
  	.kefuzaixian .qqbox{padding:4px 0;background:#Fff;}
    .kefuzaixian .qq{text-align:center;color:#362930;line-height:22px;font-size:16px;}
    .kefuzaixian h2{padding:0 0 5px 0;}
    .kefuzaixian .qqimg{padding:4px 0 0 0;}
    .kefuzaixian .qqimg iframe{display:block;margin:0 auto;}
    .kefuzaixian .welchat{text-align: center;color: #ff0000;line-height: 40px;background: #fff;margin-top: 4px;}
    .kefuzaixian .welchatimg{margin-top:4px;}
    .kefuzaixian .welchatimg img{width:100%;}
    .kefuzaixian .txt{text-align:center;color:#fff;line-height:22px;font-size:16px;padding:4px;font-weight:700;margin-top:1px;}
  </style>
<div class="kefuzaixian">
  	<h2>咨询中心</h2>
  	<div class="qqbox">
  	  <a  href="http://wpa.qq.com/msgrd?v=3&uin=746179620&site=qq&menu=yes"><div class="qq">
  	  	 QQ咨询<br>
         746179620
  	  </div></a>

  	</div>
  	<div class="welchat">
  	  	58阳生起名网
  	  </div>
  	<div class="welchatimg">
  		<img src="/Public/Home/picture/weixin.jpg">
  	</div>
  	<div class="txt">扫一扫公众号<br/>享受优质服务</div>
  </div>


    <div style="display:none"> <script src="/Public/Home/js/z_stat.js" language="JavaScript"></script> </div>
    <div id="footer">
      <div class="min-width">
        <p> <?php echo C('webpccopy');?> </p>
      </div>
    </div>
    <script type="text/javascript" src="/Public/Home/js/my.js"></script>

  </body>
</html>