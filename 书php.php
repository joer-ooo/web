<html>
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="utf-8">
        <title>第一个PHP程序</title>

    </head>
    <body>

    <?php
        $sysos = $_SERVER["SERVER_SOTWARE"];
        $sysversion = PHP_VERSION;
        mysql_connect("localhost","root","123456");
        $mysqlinfo = mysql_get_server_info();

        if(function_exists("gd_info")){
            $gd = gd_info();
            $gdinfo = $gd['GD Version'];
        }
        else{
            $gdinfo = "未知"；
        }
    $freetype = $gd["FreeType Support"]? "支持":"不支持"；
    $allowurl = ini_get("allow_url_fopen")? "支持"；"不支持"；
    $max_upload = ini_get("file_uploads")? ini_get("upload_max_filesize"): "Disabled";
    $max_ex_time = ini_get("max_execution_time")."秒"；
    date_default_timezone_set(Etc/GMT_8);
    $systemtime = date("Y-m-d H:i:s",time());

     echo "<table align=center cellspacing=0 cellpadding=0>";
     echo "<caption><h2>系统信息</h2></caption>"；
     echo "<tr><td>Web服务器：</td><td>$sysos</td></tr>";
     echo  "<tr><td>PHP版本：</td><td>$sysversion</td></tr>";
     echo   "<tr><td>MYSQL版本：</td><td>$mysqlinfo</td></tr>";
     echo  "<tr><td>GD库版本：</td><td>$gdinfo</td></tr>";
     echo  "<tr><td>FreeType:</td><td>$freetype</td></tr>";
     echo  "<tr><td>远程文件获取：</td><td>$allowurl</td></tr>";
     echo  "<tr><td>最大上传限制：</td><td>$max_upload</td></tr>";
     echo  "<tr><td>最大执行时间：</td><td>$max_ex_time</td></tr>";
     echo  "<tr><td>服务器时间：</td><td>$systemtime</td></tr>";
     echo  "</table>";
     
     ?>
        
    </body>
</html>



（int）,(integer)                        转换成整型       intval()
(bool),(boolean)                        转换成布尔型      
(float),(double),(real)                 转换成浮点型      floatval()
(string)                                转换成字符串      strval()
(array)                                 转换成数组
(object)                                转换成对象


define() 定义常量
   true 整数值“1”   false 整数值“0”



   $a = 10
   $b = $a++  


   $a = 10
   $b = ++$a

  
   $a = 10
   $b = $a++ + ++$a 
  
  
   $b = $a-- - --$a 


". ."  运算符  串连起来
var_dump   


逻辑符号
and &&      两边为TRUE       返回TRUE    否则返回FALSE
or ||       两边为FALSE      返回FALSE   否则返回TRUE
not !       为TRUE          返回FALSE   否则返回TRUE
xor         两边有一个为TRUE  返回TRUE    否则返回FALSE


<?php
   var_dump( true && true )           //bool(true)
   var_dump( true & false )           //int(0)
   var_dump( false || false )         //bool(false)
   var_dump( true | false )           //into(1)
?>

 

<?php
  $bool = false;
  $num = 10;
    
  if( $bool && ($unm++>0)) {
       echo"条件不成立"
  }
       echo $num;                       //10


  if( $bool & ($sum++>0)){
      echo"条件不成立"
  }
       echo $num;                      //11


  if( $bool ||($num++>0)){
       echo"条件成立"
 }
       echo $num;                    //10


  if( $bool | ($snum++>0)){
       echo"条件成立"
  }
       echo $num;                  //11

?>


?:
a ? b : c    如果a 为trun 执行b值   为false 执行c值
                                同if...else...   效果一样

反引号 （）    操作系统命令来执行
                                同shell_exec()效果一样


                                