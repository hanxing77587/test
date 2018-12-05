<?php
	date_default_timezone_set("Asia/Shanghai");	//设置时区(也可在 php.ini配置文件中配置)
	echo date_default_timezone_get(),'<br/>';	//获取时区

	//time()
	echo '当前时间戳： ',time(),'<br/>';					 //打印当前时间戳
	//date()
	echo date('Y 年 m 月 d 日 H:i:s',12345678),'<br/>';	 //随意解析一个时间戳的时间
	echo date('Y 年 m 月 d 日 H:i:s',time()),'<br/>';	 //显示当前时间，没设置时区时需要转换时区
	echo date(DATE_ATOM),'<br/>';//预定义的一些时间格式（宏定义）2018-11-30T11:28:06+08:00
	echo microtime(),'<br/>';	 //获取微秒级别的时间 0.30350400秒 1543547720秒

	print_r(getdate());			//把时间日期以数组形式打印显示







