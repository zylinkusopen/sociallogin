<?php

// sign info需要发送邮件到steven@zylinkus.com 获取,并且您需要提供到您网站用来接受跳转的URL信息

//把下面代码放在您所需要登录的地方
?>
<a href="http://auth.zylinkus.com?s=sign info&t=facebook">Facebook Login</a>

<?php
//把下面的代码放在您用来接收数据传输的地址
$url="http://auth.zylinkus.com/token.php?s=sign info&id=id";
$content = file_get_contents($url);
$content = base64_decode($content);
?>