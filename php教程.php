<DOCTYPE html>

<html>
    <body>
       <?php
        echo "我的第一段PHP 脚本！"；
        ？>
    </body>
</html>

注释单行  // 或者#      多行  /*   */

<?php $x=5;$y=6;$z=$x+$y; echo $z;?>

local                  内是内值  外是外值
global                 全局 函数内 外 都值都一样
static



变量
echo 回应
print 打印
strlen()   函数返回字符串的长度
str_word_count()   函数上对字符串中的单词计数
strrev()           函数反转字符串   反着显示
strpos()           函数用于检索字符串内指定的字符或者文本
str_replace()      函数用于一些字符串代替字符串

例如：
<?php
   echo str_replace("World"."Kitty"."Hello world!");
?>
  输出显示：Hello Kitty

常量
define()       默认是false          对大小写敏感
define()       有true              对大小写不敏感
define()       使用函数function     不管在函数内外 都可以





echo "<br>"
<?php 
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // 负数 
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>



字符串运算
.        串接
.=       串接赋值
++$x     前递增  值多1
$X++     后递增  值不变
--$X     前递减  值减1
$x--     后递减  值不变

and	  与	$x and $y	如果 $x 和 $y 都为 true，则返回 true。	
or	  或	$x or $y	如果 $x 和 $y 至少有一个为 true，则返回 true。
xor	  异或	$x xor $y	如果 $x 和 $y 有且仅有一个为 true，则返回 true。	
&&	  与	$x && $y	如果 $x 和 $y 都为 true，则返回 true。	
||	  或	$x || $y	如果 $x 和 $y 至少有一个为 true，则返回 true。	
!	  非	!$x	        如果 $x 不为 true，则返回 true。




if..elseif..else
switch(expression)
{
    case label1:
    expressin=label1;
    break;

    case label2:
    expression=label2;
    break;

    default:
}


do..while..   


  do {
    要执行的代码;
  } while (条件为真);


for($x=0;$x<=10;$x++){echo" ";}

foreach循环只适用于数组




array() 函数用于创建数组
count() 函数用于返回数组的长度

sort()  以升序对数组排序
rsort() 以降序对数组排序

asort() - 根据值，以升序对关联数组进行排序
ksort() - 根据键，以升序对关联数组进行排序

arsort() - 根据值，以降序对关联数组进行排序
krsort() - 根据键，以降序对关联数组进行排序    元素长度



