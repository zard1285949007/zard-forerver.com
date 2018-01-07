<?php
// $curl=curl_init("http://www.baidu.com");
// curl_exec($curl);
// curl_close($curl);

// $curlobj=curl_init();
// curl_setopt($curlobj,CURLOPT_URL,"http://www.baidu.com");
// curl_setopt($curlobj,CURLOPT_RETURNTRANSFER,true);
// $output=curl_exec($curlobj);
// curl_close($curlobj);
// echo str_replace("百度","月明",$output);

// 获取天气
// $data="theCityName=广州";
// $curlobj=curl_init();
// curl_setopt($curlobj,CURLOPT_URL,"http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName");
// curl_setopt($curlobj,CURLOPT_HEADER,0);
// curl_setopt($curlobj,CURLOPT_RETURNTRANSFER,1);
// curl_setopt($curlobj,CURLOPT_POST,1);
// curl_setopt($curlobj,CURLOPT_POSTFIELDS,$data);
// curl_setopt($curlobj,CURLOPT_HTTPHEADER,array("application/x-www-form-urlencoded;charset=utf-8","Content-length:".strlen($data)));
// curl_setopt ($curlobj, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// $rtn=curl_exec($curlobj);
// if(!curl_errno($curlobj)){
// 	echo $rtn;
// }else{
// 	echo 'Curl error'.curl_error($curlobj);
// }
// curl_close($curlobj);

// 登录慕课网并下载个人空间页面
// $data='email=18819258162&password=abcd12345&remember=1';
// $curlobj=curl_init();
// curl_setopt($curlobj,CURLOPT_URL,"https://www.imooc.com/u/5708428/courses");
// curl_setopt($curlobj,CURLOPT_RETURNTRANSFER,true);

// curl_setopt($curlobj, CURLOPT_SSL_VERIFYPEER, FALSE);  //不使用认证

// curl_setopt($curlobj, CURLOPT_SSL_VERIFYHOST, FALSE);  //不使用认证

// //设置cookie相关设置，这部分设置需要在所有会话开始之前设置
// date_default_timezone_set('PRC');//使用cookie必须先设置时区
// curl_setopt($curlobj,CURLOPT_COOKIESESSION,TRUE);
// curl_setopt($curlobj, CURLOPT_COOKIEFILE, "cookiefile");
// curl_setopt($curlobj, CURLOPT_COOKIEJAR,"cookiefile");
// curl_setopt($curlobj,CURLOPT_COOKIE,session_name().'='.session_id());
// curl_setopt($curlobj,CURLOPT_HEADER,0);
// curl_setopt($curlobj,CURLOPT_FOLLOWLOCATION,1);//这样能让curl支持页面链接跳转

// curl_setopt($curlobj,CURLOPT_POST,1);
// curl_setopt($curlobj,CURLOPT_POSTFIELDS,$data);
// curl_setopt($curlobj,CURLOPT_HTTPHEADER,array("application/x-www-form-urlencoded;charset=utf-8","Content-length:".strlen($data)));

// curl_exec($curlobj);

// curl_setopt($curlobj,CURLOPT_URL,"https://www.imooc.com/u/5708428");
// curl_setopt($curlobj,CURLOPT_POST,0);
// curl_setopt($curlobj,CURLOPT_HTTPHEADER,array("Content-type:text/xml"));

// $output=curl_exec($curlobj);
// curl_close($curlobj);
// echo $output;

// 下载网络上面的一个HTTPS的资源
$curlobj=curl_init();
curl_setopt($curlobj,CURLOPT_URL,"https//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js");
curl_setopt($curlobj,CURLOPT_RETURNTRANSFER,true);

date_default_timezone_set('PRC');
curl_setopt($curlobj,CURLOPT_SSL_VERIFYPEER,0);//终止从服务端进行验证

$output=curl_exec($curlobj);
curl_close($curlobj);
echo $output;
?>