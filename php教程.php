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
static                 静态



变量
echo 回应
print 打印
strlen()   函数返回字符串的长度
str_word_count()   函数上对字符串中的单词计数
strrev()           函数反转字符串   反着显示
strpos()           函数用于检索字符串内指定的字符或者文本  从0开始
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
return  返回值   



array() 函数用于创建数组
count() 函数用于返回数组的长度

sort()  以升序对数组排序
rsort() 以降序对数组排序

asort() - 根据值，以升序对关联数组进行排序
ksort() - 根据键，以升序对关联数组进行排序

arsort() - 根据值，以降序对关联数组进行排序
krsort() - 根据键，以降序对关联数组进行排序    元素长度



变量
$GLOBALS 引用全局 函数内外都可以用
$_SERVER 超全局变量


Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
Website: <input type="text" name="website">
Comment: <textarea name="comment" rows="5" cols="40"></textarea>


<!d0ctype html>
<html>
<head>
</head>
<body>
  <?php
  //define variables and set to empty values
  $name = $email = $gender = $comment = $website = "";

   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $website = test_input($_POST["website"]);
      $comment = test_input($POST["comment"]);
      $gender = test_input($_POST["gender"]);
   }
   function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
   }
   ?>
    
   <h2>PHP 验证实例</h2>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER[""PHP_SELF]);?>">
           姓名：<input type="text"  name="name">
           <br><br>
           电邮：<input type="text"  name="email">
           <br><br>
           网址：<input type="text"  name="website">
           <br><br>
           评论：<textarea name="comment" row="5" cols="40"></textarea>
           <br><br>
           性别：
           <input type="radio" name="gender" value="female">女性
           <input type="radio" name="gender" value="male">男性
           <br><br>
           <input type="submit" name="submit" value="提交">
   </form>
      <?php 
       echo "<h2>您的输入：</h2>"；
       echo $name;
       echo "<br>";
       echo $email;
       echo "<br>";
       echo $website;
       echo "<br>";
       echo $comment;
       echo "<br>";
       echo gender;
      ?>

</body>

</html>


$name = text_input($_POST["name"]);
if(!preg_match("/^[a_zA_Z]*$/",$name)){
  $nameErr ="只允许字母和空格！"；
}



