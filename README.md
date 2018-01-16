# 第三方登录接口
通过简单的接入，从而让您的站点具有从个第三方登录接口

1) 通过发送邮件到steven@zylinkus.com 获取key信息，并且您需要告诉到他redirect url，当信息返回成功的时候，向直接跳转到此url
2）暂时支持的第三方登录有以下几方面 google,facebook,twitter,linkedin,live这几种方式，后面我们会不断的扩展更多的第三方面登录
3）通过向 http://auth.zylinkus.com?s=key信息&t=facebook(2中提到的登录方式)
4) 当完成第3步的时候，我们的系统就会向配置的redirect url中传递id信息（重要）。
5）通过在第四步获取到的id信息，向我们的接口查询数据 http://auth.zylinkus.com/token.php?s=key信息&id=id信息. 返回的数据需要使用base64_decode处理

通过上述几步，我们简单的完成了多个登录方式的接入处理，如有其他的问题，请到 https://gitee.com/mote001/oauth/issues 提交

