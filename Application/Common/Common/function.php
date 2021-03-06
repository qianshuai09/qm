<?php
/**
 * php防注入和XSS攻击通用 仅过滤特殊字符
 */
function safe_filter($value)
{
    $ra    = array('/([\x00-\x08,\x0b-\x0c,\x0e-\x19])/', '/script/', '/javascript/', '/vbscript/', '/expression/', '/applet/', '/meta/', '/xml/', '/blink/', '/link/', '/style/', '/embed/', '/object/', '/frame/', '/layer/', '/title/', '/bgsound/', '/base/', '/onload/', '/onunload/', '/onchange/', '/onsubmit/', '/onreset/', '/onselect/', '/onblur/', '/onfocus/', '/onabort/', '/onkeydown/', '/onkeypress/', '/onkeyup/', '/onclick/', '/ondblclick/', '/onmousedown/', '/onmousemove/', '/onmouseout/', '/onmouseover/', '/onmouseup/', '/onunload/');
    $value = preg_replace($ra, '', $value); //删除非打印字符","粗暴式过滤xss可疑字符串
    return $value;
}

function is_login()
{
    $user = session('user_auth');
    if (empty($user)) {
        return 0;
    } else {
        return session('user_auth_sign') == data_auth_sign($user) ? $user['uid'] : 0;
    }
}

function data_auth_sign($data)
{
    if (!is_array($data)) {
        $data = (array) $data;
    }
    ksort($data);
    $code = http_build_query($data);
    $sign = sha1($code);
    return $sign;
}

function think_ucenter_md5($str, $key = 'HXyiyuanhuanlego')
{
    return '' === $str ? '' : md5(sha1($str) . $key);
}

//配置信息
function config_lists($keys = '')
{
    $config = S('DB_CONFIG_DATA');
    if (!$config) {
        $config = M('sys_config')->getField('keys,content');
        S('DB_CONFIG_DATA', $config);
    }

    C($config);
    if (!empty($keys)) {
        if (array_key_exists($keys, $config)) {
            return $config[$keys];
        } else {
            return '';
        }

    } else {
        return $config;
    }
}

function list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root = 0)
{
    $tree = array();
    if (is_array($list)) {
        $refer = array();
        foreach ($list as $key => $data) {
            $refer[$data[$pk]] = &$list[$key];
        }
        foreach ($list as $key => $data) {
            $parentId = $data[$pid];
            if ($root == $parentId) {
                $tree[] = &$list[$key];
            } else {
                if (isset($refer[$parentId])) {
                    $parent           = &$refer[$parentId];
                    $parent[$child][] = &$list[$key];
                }
            }
        }
    }
    return $tree;
}

function tree_to_list($tree, $child = '_child', $order = 'id', &$list = array())
{
    if (is_array($tree)) {
        $refer = array();
        foreach ($tree as $key => $value) {
            $reffer = $value;
            if (isset($reffer[$child])) {
                unset($reffer[$child]);
                tree_to_list($value[$child], $child, $order, $list);
            }
            $list[] = $reffer;
        }
        $list = list_sort_by($list, $order, $sortby = 'asc');
    }
    return $list;
}

//格式化时间
function time_format($time = null, $format = 'Y-m-d H:i')
{
    $time = $time === null ? NOW_TIME : intval($time);
    return date($format, $time);
}

function i_array_column($input, $columnKey, $indexKey = null)
{
    if (!function_exists('array_column')) {
        $columnKeyIsNumber = (is_numeric($columnKey)) ? true : false;
        $indexKeyIsNull    = (is_null($indexKey)) ? true : false;
        $indexKeyIsNumber  = (is_numeric($indexKey)) ? true : false;
        $result            = array();
        foreach ((array) $input as $key => $row) {
            if ($columnKeyIsNumber) {
                $tmp = array_slice($row, $columnKey, 1);
                $tmp = (is_array($tmp) && !empty($tmp)) ? current($tmp) : null;
            } else {
                $tmp = isset($row[$columnKey]) ? $row[$columnKey] : null;
            }
            if (!$indexKeyIsNull) {
                if ($indexKeyIsNumber) {
                    $key = array_slice($row, $indexKey, 1);
                    $key = (is_array($key) && !empty($key)) ? current($key) : null;
                    $key = is_null($key) ? 0 : $key;
                } else {
                    $key = isset($row[$indexKey]) ? $row[$indexKey] : 0;
                }
            }
            $result[$key] = $tmp;
        }
        return $result;
    } else {
        return array_column($input, $columnKey, $indexKey);
    }
}

/**
 * 循环删除目录和文件函数
 * @param string $dirName 路径
 * @param boolean $fileFlag 是否删除目录
 * @return void
 */
function del_dir_file($dirName, $bFlag = false)
{
    if ($handle = opendir("$dirName")) {
        while (false !== ($item = readdir($handle))) {
            if ($item != "." && $item != "..") {
                if (is_dir("$dirName/$item")) {
                    del_dir_file("$dirName/$item", $bFlag);
                } else {
                    unlink("$dirName/$item");
                }
            }
        }
        closedir($handle);
        if ($bFlag) {
            rmdir($dirName);
        }

    }
}

/**
 * 微信扫码支付
 * @param  array $order 订单 必须包含支付所需要的参数 body(产品描述)","total_fee(订单金额)","out_trade_no(订单号)","product_id(产品id)
 */
function weixinpay($order)
{
    $order['trade_type'] = 'NATIVE';
    Vendor('Weixinpay.Weixinpay');

    $weixinpay = new \Weixinpay();
    $weixinpay->pay($order);
}


function wexinPay($order){
    $order['trade_type'] = 'JSAPI';
    Vendor('Weixinpay.Weixinpay');

    $weixinpay = new \Weixinpay();
    return $weixinpay->payWeixin($order);
}

function wxh5pay($order)
{
    $order['trade_type'] = 'MWEB';
    Vendor('Weixinpay.Weixinpay');
    $weixinpay = new \Weixinpay();
    $weixinpay->mweb($order);
}
function Mobile_Detect()
{
    include_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect();
    return $detect;
}
/**
 * 生成二维码
 * @param  string  $url  url连接
 * @param  integer $size 尺寸 纯数字
 */
function qrcode($url, $size = 5)
{
    Vendor('Phpqrcode.phpqrcode');
    QRcode::png($url, false, QR_ECLEVEL_L, $size, 2, false, 0xFFFFFF, 0x000000);
}

/**
 * 跳向支付宝付款
 * @param  array $order 订单数据 必须包含 out_trade_no(订单号)、price(订单金额)、subject(商品名称标题)
 */
function alipay($order, $client = 'pc')
{
    vendor('Alipay.AlipaySubmit', '', '.class.php');
    // 获取配置
    $config = C('ALIPAY_CONFIG');
    $data   = array(
        "_input_charset"    => $config['input_charset'], // 编码格式
        /*"logistics_fee"     => "0.00", */// 物流费用
       /* "logistics_payment" => "SELLER_PAY",*/ // 物流支付方式SELLER_PAY（卖家承担运费）、BUYER_PAY（买家承担运费）
     /*   "logistics_type"    => "EXPRESS",*/ // 物流类型EXPRESS（快递）、POST（平邮）、EMS（EMS）
        "notify_url"        => $config['notify_url'], // 异步接收支付状态通知的链接
        "out_trade_no"      => $order['out_trade_no'], // 订单号
        "partner"           => $config['partner'], // partner 从支付宝商户版个人中心获取
        "payment_type"      => "1", // 支付类型对应请求时的 payment_type 参数,原样返回。固定设置为1即可
        "total_fee"             => $order['price'], // 订单价格单位为元
        // "price" => 0.01, // // 调价用于测试
      /*  "quantity"          => "1",*/ // price、quantity 能代替 total_fee。 即存在 total_fee,就不能存在 price 和 quantity;存在 price、quantity, 就不能存在 total_fee。 （没绕明白；好吧；那无视这个参数即可）
    /*    "receive_address"   => '1', // 收货人地址 即时到账方式无视此参数即可
        "receive_mobile"    => '1', // 收货人手机号码 即时到账方式无视即可
        "receive_name"      => '1', // 收货人姓名 即时到账方式无视即可
        "receive_zip"       => '1', // 收货人邮编 即时到账方式无视即可*/
        "return_url"        => $config['return_url'], // 页面跳转 同步通知 页面路径 支付宝处理完请求后,当前页面自 动跳转到商户网站里指定页面的 http 路径。

        // 'seller_id'         => '2088421851231245',
        'seller_id'         => $config['partner'],
       /* "seller_email"      => $config['seller_email'],*/ // email 从支付宝商户版个人中心获取
        // "service"           => "create_direct_pay_by_user",
        "service"           => $client == 'wap' ? "alipay.wap.create.direct.pay.by.user" : "create_direct_pay_by_user",
        // 接口名称 固定设置为create_direct_pay_by_user
        "show_url"          => $config['show_url'], // 商品展示网址,收银台页面上,商品展示的超链接。
        "subject"           => $order['subject'], // 商品名称商品的标题/交易标题/订单标 题/订单关键字等
    );
    // print_R($data);exit;
    $alipay = new \AlipaySubmit($config);
    if ($client == 'wap') {
        $new    = $alipay->buildRequestPara($data);
        $go_pay = $alipay->buildRequestForm($new, 'get', '支付');
        echo $go_pay;
    } else {
        $new    = $alipay->buildRequestPara($data);
        $go_pay = $alipay->buildRequestForm($new, 'get', '支付');
        echo $go_pay;
    }
}

//获取订单号
function getorderno()
{
    $orderno = 'CS' . time() . mt_rand(10000, 99999);
    return $orderno;
}

//根据订单号获取订单
function getorderbyno($num)
{
    $info = M('order')
        ->where("order_no = '%s'", array($num))
        ->field("id,order_no,name,gender,birthday,birthtime,birthmin,phone,ver,state,price,oldprice")
        ->find();
    return $info;
}

/**
 * 分割汉字
 * @param  [type]  $string [description]
 * @param  integer $len    [description]
 * @return [type]          [description]
 */
function mbStrSplit($string, $len = 1)
{
    $start  = 0;
    $strlen = mb_strlen($string);
    while ($strlen) {
        $array[] = mb_substr($string, $start, $len, "utf8");
        $string  = mb_substr($string, $len, $strlen, "utf8");
        $strlen  = mb_strlen($string);
    }
    return $array;
}

/**
 * @param string $url 请求地址
 * @param string $type 请求类型 post  get
 * @param string $arr 如果是post 传递的数据
 * @return mixed|\think\response\Json
 */
function http_request($url, $type = 'get', $arr = '')
{

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0); //设置header
    curl_setopt($ch, CURLOPT_URL, $url); //设置访问的地址
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //获取的信息返回
    if ($type == 'post') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    }
    $output = curl_exec($ch); //采集
    if (curl_error($ch)) {
        return curl_error($ch);
    }
    return $output;
}

/**
 * 获取姓名列表
 * @param  [type]  $xing   [姓氏]
 * @param  [type]  $gender [性别1男 0女]
 * @param  [type]  $page   [当前页码数]
 * @param  integer $length [每页条数]
 * @return [type]          [description]
 */
function getlist($xing = '', $gender = 1, $page = 1, $length = 100)
{
    $map['active'] = 1;
    $map['xing']   = $xing;
    if ($gender == 1) {
        $map['sex'] = 1;
    } else {
        $map['sex'] = 2;
    }
    $offset = intval(($page - 1) * $length);
    $list   = M('name')->where($map)->limit($offset, $length)->field("ming,score")->select();

    return $list;

}
