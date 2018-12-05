<!--用utf-8 with BOM编码-->
<!--打开phpstudy-->
<!--类的简单实现，直接赋值或用普通函数赋值-->
<?php
	class PHP{
		//成员变量,该变量的值对外是不可见的，但是可以通过成员函数访问
		var $var1;					//类的变量使用 var 来声明
		var $var2='hello world';	//可以赋初值

		//成员函数
		function doit(){
			echo '我是一个类函数','<br/>';
			echo 'var2: ',$this->var2,'<br/>';		//访问类属性要加this指针
			$this->var1='hello';					//属性赋值
			echo 'var1: ',$this->var1,'<br/>';

		}

		function doit1($str){						//带形参的成员函数
			$this->var1=$str;
			echo 'var1: ',$this->var1,'<br/>';	
		}



	}

$test=new PHP;								//用new创建类对象
	$test->doit();							//类方法的访问
	$test->doit1('Jc');


?>

<!--通过构造函数为变量赋值，构造函数--------------------------------------------->
<?php
	class PHP_Class{

		var $var1;									//类的变量使用 var 来声明
		var $var2;
		//构造函数
		function __construct($par1,$par2){
			$this->var1=$par1;
			$this->var2=$par2;
		}
		function __destruct(){
			echo '对象被自动销毁','<br/>';
		}


		//成员函数
		function doit(){
			echo 'var1: ',$this->var1,'<br/>';		//访问类属性要加this指针
			echo 'var2: ',$this->var2,'<br/>';		//访问类属性要加this指针
		}

	}

$test=new PHP_Class(2020,'haha');			//用new创建类对象并为变量赋值
$test->doit();								//类方法的访问（对象调用方法）

?>




