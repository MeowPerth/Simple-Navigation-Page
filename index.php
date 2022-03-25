<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>小H酱の后花园</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width" initial-scale="1" />
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no, viewport-fit=cover" />
  <meta http-equiv="expires" content="0">
  <link href="index-resource/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="index-resource/css/bootstrap.min.css" rel="stylesheet" />
  <link href="index-resource/css/so-min.css" rel="stylesheet" type="text/css" />
  <link rel="Shortcut Icon" href="index-resource/images/h-ico.png" type="image/x-icon" />
  <script src="index-resource/js/jquery-3.1.0.min.js"></script>
  <script src="index-resource/js/jquery-migrate-3.0.0.min.js"></script>
  <script src="index-resource/js/jquery.min.js"></script>
</head>

<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" );
header("Pragma: no-cache");
$str = file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=0&n=1'); //从bing获取数据
$a = preg_match("/<url>.*?<\/url>/", $str, $url);
preg_match("/<copyright>.*?\©/", $str, $copyright);
preg_match("/<headline>.*?<\/headline>/", $str, $headline);
$imgUrl = 'https://cn.bing.com'.mb_substr($url[0],5,-6);
$imgCopyright = preg_replace("/，|,/is"," - ", mb_substr($copyright[0],11,-2));
$imgHeadline = mb_substr($headline[0],10,-11);
?>

<script>
	function getQueryString(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]);
			return null;
	}
	$(document).ready(function(){
	    if(<?php echo $a ?> == 1){
	        $("body").css("background-image","url(<?php echo $imgUrl ?>)");
	    }else{
	        $("body").css("background-image","url(../index-resource/images/background.jpg)");
	    }
	    $(".bginfo-up").html('<?php echo $imgHeadline ?>');
		$(".bginfo-down").html('<?php echo $imgCopyright ?>');
	})
               
    //搜索框
	var sAddress = document.getElementsByTagName("form")[1];
    var sInfor = document.getElementById("search");
    function sBaidu() {
      sAddress.action = "https://www.baidu.com/s";
    }
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?01eb2617551fd352c78b7668f7ee9c24";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
</script>

<body>
  <div class="content">
  <div class="top">
	<div class="bginfo">
		<div class="bginfo-up">
		小H酱の后花园
		</div>
		<div class="bginfo-fgx"></div>
		<div class="bginfo-down">
		坐等国家分配对象！ - 小H酱
		</div>
	</div>
	<div class="tq">
		<iframe width="400" scrolling="no" height="26" frameborder="0" allowtransparency="true" src="https://i.tianqi.com?c=code&id=40&color=%23FFFFFF&bgc=%23&icon=3&site=12"></iframe>
	</div>
  </div>
  <div class="logos">小H酱の后花园</div>
  <div class="container">
  <div class="jumbotron" style="background-color:transparent;">
    <div class="container">
      <form action="https://www.baidu.com/s" method="get" target="_blank">
      <div id="search-box" class="input-group input-group-lg">
          <input type="search" class="form-control" name="wd" id="search" aria-label="输入搜索词" autocomplete="off" placeholder="百度一下，你知道" baiduSug="1" value="" autofocus="autofocus" />
          <span class="input-group-btn">
        	<button type="submit" id="baidu" type="button" onclick="sBaidu()" class="btn btn-success btn-info btn-search"><img class="searchicon" src="index-resource/images/search_icon.png" oncontextmenu="return false;" ondragstart="return false;"></button>
          </span>
      </div>
      </form>
      <P>
        <center>
          <span class="btn btn-success"><a id="login"  href="#" target="_blank" title="登入"><img src="index-resource/images/dsm.png">Login</a></span>
          <span class="btn btn-success"><a id="file"  href="../file/" target="_blank" title="文件站"><img src="index-resource/images/file.png">File</a></span>
          <span class="btn btn-success"><a id="drive"  href="../drive/" target="_blank" title="云盘"><img src="index-resource/images/drive.png">Drive</a></span>
          <span class="btn btn-success"><a id="photo"  href="../photo/" target="_blank" title="图库"><img src="index-resource/images/photo.ico">Photo</a></span>
          <span class="btn btn-success"><a id="video"  href="../video/" target="_blank" title="视频站"><img src="index-resource/images/video.png">Video</a></span>
          <span class="btn btn-success"><a id="audio"  href="../audio/" target="_blank" title="音乐站"><img src="index-resource/images/audio.png">Audio</a></span>
          <span class="btn btn-success"><a id="blog" href="#" target="_blank" title="博客"><img src="index-resource/images/h-ico.png">Blog</a></span>
          <span class="btn btn-success"><a id="download"  href="../download/" target="_blank" title="下载站"><img src="index-resource/images/down.png">Download</a></span>
          <span class="btn btn-success"><a id="contacts"  href="../contacts/" target="_blank" title="联系人中心"><img src="index-resource/images/contacts.png">Contacts</a></span>
          <span class="btn btn-success"><a id="vmm"  href="../vmm/" target="_blank" title="虚拟机管理器"><img src="index-resource/images/vmm.png">VMM</a></span>
          <span class="btn btn-success"><a id="phpMyAdmin"  href="../phpMyAdmin/" target="_blank" title="phpMyAdmin"><img src="index-resource/images/phpMyAdmin.png">phpMyAdmin</a></span>
          <span class="btn btn-success"><a id="comic"  href="#" target="_blank" title="本子站"><img src="index-resource/images/comic.png">Comic</a></span>
        </center>
      </P>
    </div>
  </div>
  </div>
  </div>
  <footer class="footer">
    <div class="copyright">
      <span> <a href="#" title="小H酱の后花园">小H酱の后花园</a> </span>
    </div>
  </footer>
</body>
</html>
