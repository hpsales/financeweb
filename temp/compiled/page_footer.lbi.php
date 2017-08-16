<style>
	.box_shadow3{
		font-size: 14px;
		color: #fff;
		background-color: transparent;
		border: 1px solid #666;
		height: 36px;
		line-height: 36px;
		border-radius: 2px;
		padding: 0 30px;
		margin-top: 10px;
		cursor: pointer;
		outline: none;
		transition: all ease-in-out 0.15s;
		display: inline-block;
		text-decoration: none;
	}
	.box_shadow3:hover{
		background-color: #afafaf;
		border-color: #afafaf;
		color: #414142;
	}
</style>
<div style="background-color: #414142;border-top: 1px solid #464646;position: relative;">
	<div class="block" style="margin-top: 20px;">
		<div style="width:380px;font-size: 14px;color: #afafaf;float:left;">
			<div style="width: 65px;margin: 0 34px 0 0;float: left;font-size: 14px;color: #afafaf;">
				<div style="color:#afafaf;font-size:14px;font-weight:bold">
					关于我们
				</div>
				<?php $_from = $this->_var['article_list1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['article_list1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_list1']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['article_list1']['iteration']++;
?>
				<div>
					<a href="about_us-<?php echo $this->_var['article']['article_id']; ?>.html" style="color:#afafaf;font-size:12px;line-height: 24px;"><?php echo $this->_var['article']['title']; ?></a>
				</div>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<div>
					<a href="store.php" style="color:#afafaf;font-size:12px;line-height: 24px;">线下门店</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div style="width: 145px;margin: 0 34px 0 0;float: left;font-size: 14px;color: #afafaf;text-align:center;">
				<div style="color:#afafaf;font-size:14px;font-weight:bold">
					主要项目
				</div>
				<?php $_from = $this->_var['article_list2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['article_list2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_list2']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['article_list2']['iteration']++;
?>
				<div>
					<a href="user-2-<?php echo $this->_var['article']['article_id']; ?>.html" style="color:#afafaf;font-size:12px;line-height: 24px;"><?php echo $this->_var['article']['title']; ?></a>
				</div>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<div class="clearfix"></div>
			</div>			
			<div style="width: 65px;margin: 0 34px 0 0;float: left;font-size: 14px;color: #afafaf;">
				<div style="color:#afafaf;font-size:14px;font-weight:bold">
					其他
				</div>
				<?php $_from = $this->_var['article_list3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['article_list3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_list3']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['article_list3']['iteration']++;
?>
				<div>
					<a href="about_us-<?php echo $this->_var['article']['article_id']; ?>.html" style="color:#afafaf;font-size:12px;line-height: 24px;"><?php echo $this->_var['article']['title']; ?></a>
				</div>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<div class="clearfix"></div>
			</div>			
			<div class="clearfix"></div>
		</div>
		<div style="font-size: 14px;color: #afafaf;float:left;width:340px;border-right: 1px dashed #7e7e7e;border-left: 1px dashed #7e7e7e;padding-left:50px;padding-right:50px">
			<div style="padding-top: 7px;line-height: 30px;height: 30px;font-size: 14px;color: #afafaf;font-weight: bold;">
				400电话客服（工作时间 周一至周五 9：00 - 17：30）
			</div>
			<div style="background-image: none;height: 29px;line-height: 29px;display: inline-block;white-space: nowrap;padding-left: 0;font-size:24px;font-weight:bold;color: #f6f6f6;padding-bottom:20px">
				400-820-7259
			</div>
			<div style="height: 42px;font-size: 14px;color: #afafaf;">
				<span style="color: #f6f6f6;">QQ群号：</span><a style="height: 42px;font-size: 14px;color: #afafaf;" href='http://jq.qq.com/?_wv=1027&k=2Fu76dw'>516257883</a>
			</div>
			<div style="padding-top:0px">
				<span style="color: #f6f6f6;">客服邮箱：</span>service@hhansh.com
			</div>
		</div>
		<div style="float:left">
			<div style="margin-left:23px;margin-top:20px;float:left;">
				<img src="themes/ecmoban_jumei/images/289708468225917655.jpg" style="width:100px">
				<div style="color:#fff;margin-top:5px;margin-left:3px;font-size:12px">
					政金网官方微信
				</div>	
			</div>
			<div style="margin-left:60px;margin-top:20px;float:left;">
				<img src="themes/ecmoban_jumei/images/693597873001632714.jpg" style="width:100px">
				<div style="color:#fff;margin-top:5px;margin-left:3px;font-size:12px">
					和瀚金融官方微信
				</div>	
			</div>
		</div>
		<div class="clearfix"></div>
		<hr style="height: 2px;border: none;background: url(themes/ecmoban_jumei/images/footer-hr.png) no-repeat center top;box-sizing: border-box;">
		<div style="text-align: center;padding: 20px 0 30px 0;">
			
			
			<a href="http://218.242.124.22:8081/businessCheck/verifKey.do?showType=extShow&serial=9031000020160603142249000000889696-SAIC_SHOW_310000-20160307101245827838&signData=MEYCIQDRsH6HRO2eiTsecJSAPv1/Y2BYRRf1iTsDnLE+OWuIWQIhAIJJDBOjEtlIDLo+MxLWp7TuuKHICOvrrMLsTm4vWCdv" style="margin: 0 5px;">
				<img style="width:30px;" src="themes/ecmoban_jumei/images/lz2.jpg">
			</a>
			
			<div style="display: inline-block;text-align: left;font-size: 12px;color: #e4e4e4;line-height: 20px;margin: 0 5px;">
				<p>©zhengjinnet.com  沪ICP备14047832号-2</p>
				<p>版权所有：和瀚金融信息服务(上海)有限公司</p>
			</div>
		</div>
	</div>
</div>







<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
 
