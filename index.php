<?php echo __FILE__;
echo "<br />";
echo __LINE__;
echo "<br />";
echo PHP_VERSION;
echo "<br />";
echo PHP_OS;
echo "<br />"; ?>


<h2>1、字符串型可以用三种方法定义：单引号形式、双引号形式和Heredoc结构形式。</h2>
<h4>『当双引号中包含变量时，变量会与双引号中的内容连接在一起；
    当单引号中包含变量时，变量会被当做字符串输出。』</h4>
<?php
$str_string1 = '甲问："你在哪里学的PHP？"';
$str_string2 = "乙毫不犹豫地回答：'php.net！'";
$str_string3 = '甲问:\'能告诉我网址吗？\'';
$str_string4 = "乙答道:\"http://php.net/\"";
echo $str_string1;
echo "<br />";
echo $str_string2;
echo "<br />";
echo $str_string3;
echo "<br />";
echo $str_string4;
echo "<br />";
?>
<h2>2、字符串很长：使用Heredoc结构形式的方法来解决该问题</h2>
<?php
$longStr = <<<GOD
我有一只小毛驴，我从来也不骑。
有一天我心血来潮，骑着去赶集。
我手里拿着小皮鞭，我心里正得意。
不知怎么哗啦啦啦啦，我摔了一身泥.
GOD;
echo $longStr;
?>

<h2>3、特殊类型—空类型</h2>
<h4>『NULL是空类型，对大小写不敏感，NULL类型只有一个取值，表示一个变量没有值，当被赋值为NULL，或者尚未被赋值，或者被unset()，这三种情况下变量被认为为NULL。』</h4>


<h2>4、自定义常量</h2>
<pre>bool define(string $constant_name, mixed $value[, $case_sensitive = true])</pre>
<?php
$desc = <<<GOD
『第一个参数“constant_name”为必选参数，常量名称,即标志符，常量的命名规则与变量的一致，但是要注意哦，它可不带美元符号哦。』<br />
『第二个参数“value”为必选参数，它是常量的值。』<br />
『第三个参数“case_sensitive”为可选参数，指定是否大小写敏感，设定为true表示不敏感，一般不指定第三个参数的情况下，默认第三个参数的值为false。』<br />

GOD;
echo $desc;

$p = "PII";
define("PI", 3.141);
define($p, 3.14);
echo PI;
echo "<br />";
echo PII;
?>

<h2>5、错误控制运算符</h2>
<h4>『将@放置在一个PHP表达式之前，该表达式可能产生的任何错误信息都被忽略掉；』</h4>
<?php
$conn = @mysql_connect("localhost", "username", "password");
echo "出错了，错误原因是：" . $php_errormsg;
?>

<h2>6、foreach循环语句</h2>
<?php
$students = array('2010' => '令狐冲', '2011' => '林平之', '2012' => '曲洋',);
foreach ($students as $v) {
    echo $v;
    echo "<br/>";
}
foreach ($students as $key => $v) {
    echo $key . ":" . $v;
    echo "<br/>";
}

?>

<?php
//$url = "http://www.baidu.com";
//echo " <script   language = 'javascript'
//type = 'text/javascript'> ";
//echo " window.location.href = '$url' ";
//echo " </script > ";
//

class People
{
    public $name = 'test';
    public $mobile = '13800001111';
}

$obj = new People();
$array = array
(
    'Name' => urlencode('小米'),
    'Age' => 20,
    'people' => $obj
);

echo json_encode($array);
?>

<?php

class Car { public $name = 'car'; public function __clone() { $obj = new Car(); $obj->name = $this->name; } } $a = new Car(); $a->name = 'new car'; $b = clone $a; var_dump($b);

?>

