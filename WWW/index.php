<?php
	//代码要以UTF-8 with BOM 方式编码，可以显示中文

	echo 'hello ','world','<br/>','Jc';	//<hr/>:分割线，<br/>：换行
	echo '<hr/>';

	//变量
	echo '变量','<br/>';
	$var1;							//未赋值无法打印输出			
	$var2=1;
	echo $var2,'<br/>';
	//可变变量
	$a='b';
	$b='bb';
	echo $$a,'<br/>';				//输出bb

	//引用的传递
	$b=&$a;
	echo '引用的传递：',$b,'<br/>';				//引用的传递
	echo '<hr/>';

	//常量
	echo '常量','<br/>';
	define('PI',3.14);
	const PII=3.14159;
	echo 'PI: ',PI,' PII:',PII,'<br/>';
	//特殊常量定义
	define('-_-',5);
	//特殊常量显示
	echo constant('-_-');
	//系统常量
	echo '<br/>',PHP_VERSION,'<br/>',PHP_INT_SIZE,'<br/>',PHP_INT_MAX,'<hr/>';

	//数据类型
	echo '数据类型','<br/>';
	var_dump(is_int($a));
	echo '<br/>';
	var_dump(is_string($a));
	echo '<br/>';

	//设置数据类型
	$num=123;
	$data='123';
	echo gettype($num),'<br/>';
	settype($data,'int');
	echo gettype($data),'<br/>';

    //连接运算符
    echo '连接运算符','<br/>';
    $str='HH';
    $str .= $num;
    echo $str,'<br/>';
    echo '<hr/>';

    //if判断
    echo 'if判断','<br/>';

    if($num == 123){	//注意区别$num === '123'
    	echo 'num: 123','<br/>';
    }else{
    	echo 'num: xxx','<br/>';	
    }

	//switch
    echo 'switch判断','<br/>';
    $day=2;						//做的是 == 操作 所以 '2'  和  2  都行
    switch ($day) {
    	case '1':				
    		echo 'day is 1','<br/>';
    		break;
    	case '2':
    		echo 'day is 2','<br/>';	
    		break;	
    	
    	default:
    		echo 'other','<br/>';
    		break;
    }

    //for循环
    echo 'for循环','<br/>';
    for($i=0;$i<10;$i++){
    	echo $i,' ';

    }
    echo '<br/>';

    for($i=0,$end=10;$i<$end;$i++){			//可以同时设置开始和结束。
    	echo $i,' ';
    }
	echo '<br/>';

    //while循环
    echo 'while循环','<br/>';
    $i=10;
    while($i<20){
    	echo $i,' ';
    	$i++;
    }
    echo '<br/>';

    //do...while 循环(输出偶数)
    $i=0;
    do{
    	if($i % 2 != 1){
    		echo $i , ' ';	
    	}

    	$i++;
    }while($i<10);
    echo '<br/>';

    //continue
    $i=0;
    while ($i<=100) {
    	if($i % 5 != 0){
    		$i++;
    		continue;		//如果不是5的倍数就调到循环开始处。
    	}
    	echo $i++,' ';
    }
    echo '<hr/>';

//到此为一段PHP代码的结束?>	
<!----------------------------------------------------------------------------->

<?php //for循环的替代语法,只有<?php /?/> 中间的语句才是PHP，PHP解释器才会解析，外边的为HTML语句 ?>

<?php echo '代替语法' ?>				<!--PHP语法,这是HTML的注释方法-->
<br/>								<!--HTML语法,这是HTML的注释方法-->
<?php for($i=0;$i<=10;$i++):?>
	
    	<?php echo $i,' ';?>

<?php endfor;?>	

<hr/>								<!--HTML语法,这是HTML的注释方法-->

<!----------------------------------------------------------------------------->
<!--新的PHP语句开始,这是HTML的注释方法-->

<?php   								
	//数组
	echo '数组','<br/>';
	$str=array('volvo','BMW','Aodi','RR','benz');
	echo $str[0],' ',$str[2],' 数组元素个数：',count($str),'<br/>';

//数组遍历
	for($i=0;$i<count($str);$i++){
		echo $str[$i],' ';
	}
	echo '<br/>';	




	echo '<hr/>';

//函数	
	function doit1(){					//函数实现
		echo '我是函数1','<br/>';
	}
	function doit2($x,$y){					//带参数
		echo '我是函数2','<br/>';
		echo 'x+y=',$x+$y;
	}
	function doit3($x,$y){					//带参数，返回值
		echo '我是函数3','<br/>';
		$data=$x+$y;
		return $data;

	}

	$i=30;
	if($i<=10){
		doit1();							//函数调用
	}elseif($i<=20){
		doit2(1,5);
	}else{
		$sum=doit3(5,5);
		echo 'x+y'.$sum;					//用的是 . 运算符
	}	

//print print_r
	echo '<hr/>';
	echo print ('hello'),'<br/>';			//print 返回1

	print_r($i);echo '<br/>';				//只会输出值，常用于数组
	var_dump($i);echo '<br/>';				//输出值和类型，常用于布尔值的显示

	echo '<hr/>';


//局部访问全局变量。
	$x="hello Jc";
	function display(){
		//方法1，定义同名global变量
		global $x;
		echo $x,'<br/>';

		//方法2，使用GLOBALS数组
		echo $GLOBALS['x'],'<br/>';


	}
	display();

//全局空间访问局部变量
	function display1(){
		//定义global变量
		global $y;
		$y='hello world';	

	}
	display1();				//必须要调用
	echo $y;
	echo '<hr/>';

//可变函数
	function display2(){
		echo '可变函数','<br/>';
	}
	$func='display2';		
	$func();				//变量名+()

//匿名函数
	$func3=function(){		//没有函数名，用可变函数接收
		echo '匿名函数','<br/>';
	};						//分号
	$func3();

//闭包函数
	function display4(){
		$name='Jc';						//局部变量
		$func4=function() use($name){	//匿名函数+use()
			echo $name,'<br/>';
		};
		$func4();						//调用匿名函数
	}
	display4();							//调用函数

//闭包函数验证
	function display5(){
		$name='Jc';						//局部变量
		$func5=function() use($name){	//匿名函数+use()
			echo $name,'<br/>';
		};
		return $func5;						//返回匿名函数
	}
	$closure=display5();					//接收匿名函数
	$closure();								//调用匿名函数





