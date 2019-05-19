<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE'    => 'Home', //默认模块
	'MODULE_ALLOW_LIST'	=> array('Home', 'Admin'),
	'TAGLIB_BUILD_IN'        => 'Cx,Common\Tag\My',              // 加载自定义标签
	'LOAD_EXT_CONFIG' 	=> 'db,ver',
	'URL_MODEL'			=> 0,
	'DATA_CACHE_TYPE'	=> 'file',
	'DATA_CACHE_TIME'	=> 7000,
	'SAFE_SALT'			=> '/@LSWIG/#', // 全局盐值
	//上传路径
	'UPLOADPATH' => './Upload/',
	//定义前后台js、css、image的引入模板常量
	'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/Public',
		//后台
        '__AJS__' => __ROOT__ . '/Public/admin/js',
        '__ACSS__' => __ROOT__ . '/Public/admin/css',
        '__AIMG__' => __ROOT__ . '/Public/admin/image',
		//前台
		'__HJS__' => __ROOT__ . '/Public/home/js',
        '__HCSS__' => __ROOT__ . '/Public/home/css',
        '__HIMAGE__' => __ROOT__ . '/Public/home/images',
		'__HIMG__' => __ROOT__ . '/Public/home/img',
    ),
	
	
	//支付宝配置参数 手机端
	'alipay_config_mobile'=>array(
		'partner'		=> '2088301141401265',
		'seller_id'		=> '2088301141401265',
		'key'			=> '5b76tq0fl3ggt5o8ol75knrkv93dhzk6',
		'notify_url' 	=> "http://vv.lswig.cn/alinotify.php",
		'return_url' 	=> "http://vv.lswig.cn/index.php?m=Home&c=Alipay&a=returnurl",
		'sign_type'    	=> strtoupper('MD5'),
		'input_charset'	=> strtolower('utf-8'),
		'cacert'    	=> getcwd().'\\cacert.pem',
		'transport'    	=> 'http',
		'payment_type'	=> "1",
		'service'		=> "alipay.wap.create.direct.pay.by.user",
	),
	//以上配置项，是从接口包中alipay.config.php 文件中复制过来，进行配置；
	
	 'alipay'   =>array(
		 //这里是卖家的支付宝账号，也就是你申请接口时注册的支付宝账号
		 'seller_email'=>'656580181@qq.com',
		 //这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法；
		 'notify_url'=>'http://vv.lswig.cn/alinotify.php', 
		 //这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
		 'return_url'=>'http://vv.lswig.cn/index.php?m=Home&c=Alipay&a=returnurl',
		 //支付成功跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参payed（已支付列表）
		 'successpage'=>'http://vv.lswig.cn/index.php?m=Home&c=Ucenter&a=index',
		 //支付失败跳转到的页面，我这里跳转到项目的Index控制器，myorder方法，并传参unpay（未支付列表）
		 'errorpage'=>'http://vv.lswig.cn/index.php?m=Home&c=Ucenter&a=index',
	 ),
	 
	 'JUB'=> array(
		"seqing"=>"色情",
		"xuexing"=>"血腥",
		"baoli"=>"暴力",
		"weifa"=>"违法",
		"daoban"=>"盗版",
		"qita"=>"其他",
	),
);