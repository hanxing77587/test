<?php
	//include 'include1.php';			//相当于把include1粘贴了过来，重复包含会报错
	include_once 'include1.php';		//如果重复包含，它就只包含一次，自动不做重复包含，不报错
	include_once 'include1.php';
	echo '$a: ',$a,'<br/>';				//所以可以直接调用include1的内容

	require 'include2.php';				//比include更严格，include包含出错不影响下面代码正常执行
										//require包含出错，将停止代码运行

	echo '$b: ',$b,'<br/>';





