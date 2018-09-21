﻿<!DOCTYPE html>
<?php
      error_reporting(E_ALL^E_NOTICE^E_WARNING);
     session_start();
     $sendKey=md5(time());
     $page=$_GET["page"];
     if($page=="") header("location:?page=index");
     $_SESSION['key']=$sendKey;
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"></script>
  <script src="https://cdn.bootcss.com/semantic-ui/2.3.1/semantic.min.js"></script>
  <script type="text/javascript" src="js/wecheck.js"></script>
  <script src=""></script>
  <script type="text/javascript">
      (function() {
       var s = document.createElement('script');
       s.type = 'text/javascript';
       s.async = true;
       s.src = 'https://cdn.bootcss.com/echarts/4.1.0.rc2/echarts.js';
       var x = document.getElementsByTagName('script')[0];
       x.parentNode.insertBefore(s, x);
       var link = $('<link />');
        link.attr('href', '//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        link.attr('rel', 'stylesheet');
        link.appendTo($('head'));
    })();
  </script>
  <script src="js/nav.js"></script>
  <link href="js/Semantic/semantic.css"  rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
  <title>韶关学院水电费查询</title>
</head>
<body>

  <div class="mainPart">
    <div class="checkPart">
      <div class="bigTitle">
        <span>韶关学院水电查询</span>
      </div>
      <div class="selectPart">
          <span class="indexButton <?php if($page=="index"){echo "inPage";}else{echo "outPage";if($_SESSION["isExist"]=="yes")echo " canSele";}?>" a1="index">水电查询</span>
          <span class="timeButton <?php if($page=="time"){echo "inPage";}else{echo "outPage";if($_SESSION["isExist"]=="yes")echo " canSele";}?>" a1="time">时间查询</span>
          <span class="topupButton <?php if($page=="charge"){echo "inPage";}else{echo "outPage";if($_SESSION["isExist"]=="yes")echo " canSele";}?>" a1="charge">充值记录</span>
          <span class="setButton <?php if($page=="set"){echo "inPage";}else{echo "outPage";if($_SESSION["isExist"]=="yes")echo " canSele";}?>" a1="set">设置</span>
      </div>
            <?php
              if($page=="index")
              {
                include "wechechpage.php";
              }
              else if($page=="charge")
              {
                include "charge.php";
              }

            ?>
  </div>
  <div id="metrePart">
    <div class="ICT">
        <img src="img/logo.png" alt="" style="width:60px;margin:auto;">
    </div>
    <div class="madeBy" style="display: none" key="<?php echo $sendKey?>">
      MADE BY CHENHUITAO陈慧涛
    </div>
  </div>

</body>
</html>
