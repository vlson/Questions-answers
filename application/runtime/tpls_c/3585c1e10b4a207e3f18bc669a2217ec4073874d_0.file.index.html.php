<?php
/* Smarty version 3.1.29, created on 2018-04-12 19:10:47
  from "D:\WAMP\Apache24\htdocs\Questions-Answers\application\home\view\index\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5acf3eb79dcb37_68315965',
  'file_dependency' => 
  array (
    '3585c1e10b4a207e3f18bc669a2217ec4073874d' => 
    array (
      0 => 'D:\\WAMP\\Apache24\\htdocs\\Questions-Answers\\application\\home\\view\\index\\index.html',
      1 => 1523531446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acf3eb79dcb37_68315965 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html class="">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta content="IE=edge,Chrome=1" http-equiv="X-UA-Compatible">
	<meta content="webkit" name="renderer">
	<title>发现 - 有问必答</title>
	<meta content="有问必答,知识社区,社交社区,问答社区" name="keywords">
	<meta content="有问必答 社交化知识社区" name="description">
	<base href="">
	<!--[if IE]>
</base>
<![endif]-->
<link type="image/x-icon" rel="shortcut icon" href="<?php echo PUBLIC_PATH;?>
home/css/default/img/favicon.ico?v=20151125">

<link href="<?php echo PUBLIC_PATH;?>
home/css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="<?php echo PUBLIC_PATH;?>
home/css/icon.css" type="text/css" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/css/default/common.css?v=20151125">
<link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/css/default/link.css?v=20151125">
<link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/js/plug_module/style.css?v=20151125">

<?php echo '<script'; ?>
 type="text/javascript">
	var _90DB43ABD4D2EFB80B143A0DF5B3B668="18C84670BD4E0E36";
	var G_POST_HASH=_90DB43ABD4D2EFB80B143A0DF5B3B668;
	var G_INDEX_SCRIPT = "?/";
	var G_SITE_NAME = "WeCenter";
	var G_BASE_URL = "";
	var G_STATIC_URL = "static";
	var G_UPLOAD_URL = "uploads";
	var G_USER_ID = "1";
	var G_USER_NAME = "itbull";
	var G_UPLOAD_ENABLE = "Y";
	var G_UNREAD_NOTIFICATION = 0;
	var G_NOTIFICATION_INTERVAL = 100000;
	var G_CAN_CREATE_TOPIC = "1";
	var G_ADVANCED_EDITOR_ENABLE = "Y";

	<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/jquery.2.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/jquery.form.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/plug_module/plug-in_module.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/aws.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/aw_template.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/app.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PUBLIC_PATH;?>
home/js/compatibility.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--[if lte IE 8]>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/respond.js"><?php echo '</script'; ?>
>
<![endif]-->
<style type="text/css">.fancybox-margin{margin-right:17px;}</style>
</head>
<body>
<noscript id="noscript" unselectable="on">
	<div class="aw-404 aw-404-wrap container">
		<img src="static/common/no-js.jpg">
		<p>你的浏览器禁用了JavaScript, 请开启后刷新浏览器获得更好的体验!</p>
	</div>
</noscript>

<div class="aw-top-menu-wrap">
	<div class="container">
		<!-- logo -->
		<div class="aw-logo hidden-xs">
			<a href=""></a>
		</div>
		<!-- end logo -->
		<!-- 搜索框 -->
		<div class="aw-search-box  hidden-xs hidden-sm">
			<form method="post" id="global_search_form" action="?/search/" class="navbar-search">
				<input type="text" id="aw-search-query" name="q" autocomplete="off" placeholder="搜索问题、话题或人" class="form-control search-query">
				<span onclick="$('#global_search_form').submit();" id="global_search_btns" title="搜索"> <i class="icon icon-search"></i>
				</span>
				<div class="aw-dropdown">
					<div class="mod-body">
						<p class="title">输入关键字进行搜索</p>
						<ul class="aw-dropdown-list hide"></ul>
						<p class="search">
							<span>搜索:</span>
							<a onclick="$('#global_search_form').submit();"></a>
						</p>
					</div>
					<div class="mod-footer">
						<a class="pull-right btn btn-mini btn-success publish" onclick="" href="publish.html">发起问题</a>
					</div>
				</div>
			</form>
		</div>
		<!-- end 搜索框 -->
		<!-- 导航 -->
		<div class="aw-top-nav navbar">
			<div class="navbar-header">
				<button class="navbar-toggle pull-left">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav">
					<li>
						<a class="active" href="index.html"> <i class="icon icon-list"></i>
							发现
						</a>
					</li>
					<li>
						<a href="topic_index.html">
							<i class="icon icon-topic"></i>
							话题
						</a>
					</li>
					<li>
						<a style="font-weight:bold;">· · ·</a>
						<div class="dropdown-list pull-right">
							<ul id="extensions-nav-list"></ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<!-- end 导航 -->
		<!-- 未登录展示 -->
		<div class="aw-user-nav">
			<!-- 登陆&注册栏 -->
			<a href="login.html" class="login btn btn-normal btn-primary">登录</a>
			<a href="register.html" class="register btn btn-normal btn-success">注册</a>
			<!-- end 登陆&注册栏 -->
		</div>
		<!-- 登陆成功展示用户栏 -->
		<div class="aw-user-nav">
			<!-- 登陆&注册栏 -->
			<a class="aw-user-nav-dropdown" href="people.html">
				<img src="static/common/avatar-mid-img.png" alt="itbull"></a>
			<div class="aw-dropdown dropdown-list pull-right">
				<ul class="aw-dropdown-list">
					<li class="hidden-xs">
						<a href="user_set.html">
							<i class="icon icon-setting"></i>
							设置
						</a>
					</li>
					<li class="hidden-xs">
						<a href="admin/login.html">
							<i class="icon icon-job"></i>
							管理
						</a>
					</li>
					<li>
						<a href="?/account/logout/">
							<i class="icon icon-logout"></i>
							退出
						</a>
					</li>
				</ul>
			</div>
			<!-- end 登陆&注册栏 -->
		</div>
		<!-- end 用户栏 -->
		<!-- 发起 -->
		<div class="aw-publish-btn">

			<a onclick="AWS.dialog('publish', {'category_enable':'1', 'category_id':'0', 'topic_title':''}); return false;" href="?/publish/" class="btn-primary" id="header_publish">
				<i class="icon icon-ask"></i>
				发起
			</a>
			<div class="dropdown-list pull-right">
				<ul>
					<li>
						<a onclick="" href="publish.html">问题</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- end 发起 -->
	</div>
</div>

<div class="aw-container-wrap">
	<div class="container category">
		<div class="row">
			<div class="col-sm-12">
				<dl>
					<dt>
						<img alt="默认分类" src="<?php echo PUBLIC_PATH;?>
home/css/default/img/default_class_imgs.png"></dt>
					<dd>
						<p class="title">
							<a href="category.html">默认分类</a>
						</p>
						<span>默认分类描述</span>
					</dd>
				</dl>
				<?php
$_from = $_smarty_tpl->tpl_vars['cateList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cate_0_saved_item = isset($_smarty_tpl->tpl_vars['cate']) ? $_smarty_tpl->tpl_vars['cate'] : false;
$_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cate']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
$__foreach_cate_0_saved_local_item = $_smarty_tpl->tpl_vars['cate'];
?>
				<dl>
					<dt>
						<img alt="分类Logo" src="<?php echo THUMB_PATH;?>
category/<?php echo $_smarty_tpl->tpl_vars['cate']->value['catLogo'];?>
"></dt>
					<dd>
						<p class="title">
							<a href="category.html"><?php echo $_smarty_tpl->tpl_vars['cate']->value['catName'];?>
</a>
						</p>
						<span></span>
					</dd>
				</dl>
				<?php
$_smarty_tpl->tpl_vars['cate'] = $__foreach_cate_0_saved_local_item;
}
if ($__foreach_cate_0_saved_item) {
$_smarty_tpl->tpl_vars['cate'] = $__foreach_cate_0_saved_item;
}
?>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="aw-content-wrap clearfix">
				<div class="col-sm-12 col-md-9 aw-main-content">
					<!-- end 新消息通知 -->
					<!-- tab切换 -->
					<ul class="nav nav-tabs aw-nav-tabs active hidden-xs">
						<li>
							<a href="">等待回复</a>
						</li>
						<li>
							<a id="sort_control_hot" href="">热门</a>
						</li>
						<li>
							<a href="">推荐</a>
						</li>
						<li class="active">
							<a href="">最新</a>
						</li>

						<h2 class="hidden-xs">
							<i class="icon icon-list"></i>
							发现
						</h2>
					</ul>
					<!-- end tab切换 -->

					<div class="aw-mod aw-explore-list">
						<div class="mod-body">
							<div class="aw-common-list">
								<div data-topic-id="2," class="aw-item active">
									<a rel="nofollow" href="people.html" data-id="1" class="aw-user-name hidden-xs">
										<img alt="" src="static/common/avatar-max-img.png"></a>
									<div class="aw-question-content">
										<h4>
											<a href="question.html">PHP可以做什么</a>
										</h4>
										<a class="pull-right text-color-999" href="answer.html">回复</a>

										<p>
											<a href="category.html" class="aw-question-tags">PHP</a>
											•
											<a class="aw-user-name" href="people.html">itbull</a>
											<span class="text-color-999">发起了问题 • 1 人关注 • 0 个回复 • 1 次浏览 • 3 天前</span>
											<span class="text-color-999 related-topic hide">• 来自相关话题</span>
										</p>

									</div>
								</div>
								<div data-topic-id="" class="aw-item active">
									<a rel="nofollow" href="people.html" data-id="1" class="aw-user-name hidden-xs">
										<img alt="" src="static/common/avatar-max-img.png"></a>
									<div class="aw-question-content">
										<h4>
											<a href="question.html">PHP的英文是什么</a>
										</h4>
										<a class="pull-right text-color-999" href="answer.html">回复</a>

										<p>
											<a href="category.html" class="aw-question-tags">PHP</a>
											•
											<a class="aw-user-name" href="people.html">itbull</a>
											<span class="text-color-999">发起了问题 • 1 人关注 • 0 个回复 • 1 次浏览 • 3 天前</span>
											<span class="text-color-999 related-topic hide">• 来自相关话题</span>
										</p>

									</div>
								</div>
								<div data-topic-id="" class="aw-item active">
									<a rel="nofollow" href="people.html" data-id="1" class="aw-user-name hidden-xs">
										<img alt="" src="static/common/avatar-max-img.png"></a>
									<div class="aw-question-content">
										<h4>
											<a href="question.html">战国七雄是哪几个</a>
										</h4>
										<a class="pull-right text-color-999" href="answer.html">回复</a>

										<p>
											<a href="category.html" class="aw-question-tags">PHP</a>
											•
											<a class="aw-user-name" href="people.html">itbull</a>
											<span class="text-color-999">发起了问题 • 1 人关注 • 0 个回复 • 1 次浏览 • 3 天前</span>
											<span class="text-color-999 related-topic hide">• 来自相关话题</span>
										</p>

									</div>
								</div>
							</div>
						</div>
						<div class="mod-footer">
							<div class="page-control">
								<ul class="pagination pull-right">
									<li class="active">
										<a href="javascript:;">1</a>
									</li>
									<li>
										<a href="?/sort_type-new__day-0__is_recommend-0__page-2">2</a>
									</li>
									<li>
										<a href="?/sort_type-new__day-0__is_recommend-0__page-2">&gt;</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- 侧边栏 -->
				<div class="col-sm-12 col-md-3 aw-side-bar hidden-xs hidden-sm">
					<div class="aw-mod aw-text-align-justify">
						<div class="mod-head">
							<a class="pull-right" href="topic_index.html">更多 &gt;</a>
							<h3>热门话题</h3>
						</div>
						<div class="mod-body">
							<dl>
								<dt class="pull-left aw-border-radius-5">
									<a href="topic.html">
										<img src="static/common/topic-mid-img.png" alt=""></a>
								</dt>
								<dd class="pull-left">
									<p class="clearfix">
										<span class="topic-tag">
											<a data-id="2" class="text" href="topic.html">php</a>
										</span>
									</p>
									<p> <b>3</b>
										个问题, <b>1</b>
										人关注
									</p>
								</dd>
							</dl>
							<dl>
								<dt class="pull-left aw-border-radius-5">
									<a href="topic.html">
										<img src="static/common/topic-mid-img.png" alt=""></a>
								</dt>
								<dd class="pull-left">
									<p class="clearfix">
										<span class="topic-tag">
											<a data-id="3" class="text" href="topic.html">引力波</a>
										</span>
									</p>
									<p>
										<b>1</b>
										个问题,
										<b>1</b>
										人关注
									</p>
								</dd>
							</dl>
							<dl>
								<dt class="pull-left aw-border-radius-5">
									<a href="topic.html">
										<img src="static/common/topic-mid-img.png" alt=""></a>
								</dt>
								<dd class="pull-left">
									<p class="clearfix">
										<span class="topic-tag">
											<a data-id="4" class="text" href="topic.html">引力</a>
										</span>
									</p>
									<p>
										<b>1</b>
										个问题,
										<b>1</b>
										人关注
									</p>
								</dd>
							</dl>
						</div>
					</div>
					<div class="aw-mod aw-text-align-justify">
						<div class="mod-head">
							<a class="pull-right" href="?/people/">更多 &gt;</a>
							<h3>热门用户</h3>
						</div>
						<div class="mod-body">

							<dl>
								<dt class="pull-left aw-border-radius-5">
									<a href="people.html">
										<img src="static/common/avatar-mid-img.png" alt=""></a>
								</dt>
								<dd class="pull-left">
									<a class="aw-user-name" data-id="2" href="people.html">bull</a>
									<p class="signature"></p>
									<p>
										<b>1</b>
										个问题,
										<b>0</b>
										次赞同
									</p>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<!-- end 侧边栏 -->
			</div>
		</div>
	</div>
</div>

<div class="aw-ajax-box" id="aw-ajax-box"></div>

<div class="aw-footer-wrap">
	<div class="aw-footer">
		Copyright &copy; 2016-2099, All Rights Reserved
		<span class="hidden-xs">
			Powered By
			<a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
		</span>

	</div>
</div>

</body>
</html><?php }
}
