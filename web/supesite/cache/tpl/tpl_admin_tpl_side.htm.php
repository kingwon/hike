<?php if(!defined('IN_SUPESITE')) exit('Access Denied'); ?>
<?php if($menus['0']) { ?>
<div class="block style1" id="menus_0">
<h2>系统管理</h2>
<ul class="folder">
<?php if($menus['0']['settings']) { ?>
<li<?=$menuactive['settings']?>><a href="<?=CPURL?>?action=settings">系统设置</a></li>
<?php } ?>

<?php if($menus['0']['channel']) { ?>
<li<?=$menuactive['channel']?>><a href="<?=CPURL?>?action=channel">频道管理</a></li>
<?php } ?>

<?php if($menus['0']['html']) { ?>
<li<?=$menuactive['html']?>>
<?php if($_SCONFIG['makehtml'] == 1) { ?>
<a href="<?=CPURL?>?action=makehtml">静态配置</a></li>
<?php } else { ?>
<a href="<?=CPURL?>?action=html">静态配置</a></li>
<?php } ?>
<?php } ?>
<?php if($menus['0']['html'] && $_SC['freshhtml']) { ?>
<li<?=$menuactive['freshhtml']?>><a href="<?=CPURL?>?action=freshhtml">生成HTML</a></li>
<?php } ?>

<?php if($menus['0']['tpl']) { ?>
<li<?=$menuactive['tpl']?>><a href="<?=CPURL?>?action=tpl">模板编辑</a></li>
<?php } ?>

<?php if($menus['0']['css']) { ?>
<li<?=$menuactive['css']?>><a href="<?=CPURL?>?action=css">样式表编辑</a></li>
<?php } ?>

<?php if($menus['0']['crons']) { ?>
<li<?=$menuactive['crons']?>><a href="<?=CPURL?>?action=crons">计划任务</a></li>
<?php } ?>

<?php if($menus['0']['database']) { ?>
<li<?=$menuactive['database']?>><a href="<?=CPURL?>?action=database">数据库</a></li>
<?php } ?>

<?php if($menus['0']['words']) { ?>
<li<?=$menuactive['words']?>><a href="<?=CPURL?>?action=words">词语过滤</a></li>
<?php } ?>

<?php if($menus['0']['attachmenttypes']) { ?>
<li<?=$menuactive['attachmenttypes']?>><a href="<?=CPURL?>?action=attachmenttypes">附件类型</a></li>
<?php } ?>

<?php if($menus['0']['prefields']) { ?>
<li<?=$menuactive['prefields']?>><a href="<?=CPURL?>?action=prefields">预先值</a></li>
<?php } ?>

<?php if($menus['0']['sitemap']) { ?>
<li<?=$menuactive['sitemap']?>><a href="<?=CPURL?>?action=sitemap">SITEMAP</a></li>
<?php } ?>

<?php if($menus['0']['polls']) { ?>
<li<?=$menuactive['polls']?>><a href="<?=CPURL?>?action=polls">投票</a></li>
<?php } ?>

<?php if($menus['0']['customfields']) { ?>
<li<?=$menuactive['customfields']?>><a href="<?=CPURL?>?action=customfields">自定义信息</a></li>
<?php } ?>

<?php if($menus['0']['announcements']) { ?>
<li<?=$menuactive['announcements']?>><a href="<?=CPURL?>?action=announcements">公告管理</a></li>
<?php } ?>

<?php if($menus['0']['ad']) { ?>
<li<?=$menuactive['ad']?>><a href="<?=CPURL?>?action=ad">广告</a></li>
<?php } ?>

<?php if($menus['0']['friendlinks']) { ?>
<li<?=$menuactive['friendlinks']?>><a href="<?=CPURL?>?action=friendlinks">友情链接</a></li>
<?php } ?>

<?php if($menus['0']['cache']) { ?>
<li<?=$menuactive['cache']?>><a href="<?=CPURL?>?action=cache">缓存更新</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['1']) { ?>
<div class="block style1" id="menus_1">
<h2>信息管理</h2>
<ul class="folder">
<?php if($menus['1']['modpost'] || $menus['1']['editpost'] || $menus['1']['delpost']) { ?>
<li<?=$menuactive['spacenews']?>><a href="<?=CPURL?>?action=spacenews">资讯管理</a></li>
<?php } ?>

<?php if($models) { ?>
<?php if(is_array($models)) { foreach($models as $value) { ?>
<?php $channel = $value['modelname'];; ?>
<?php if(checkperm('allowmanage')) { ?>
<?php if($menus['1']['modpost'] || $menus['1']['editpost'] || $menus['1']['delpost']) { ?>
<li><a href="<?=CPURL?>?action=modelmanages&mid=<?=$value['mid']?>"><?=$value['modelalias']?>管理</a></li>
<?php } ?>
<?php } ?>
<?php } } ?>
<?php } ?>
<?php if($menus['1']['modcat'] || $menus['1']['editcat'] || $menus['1']['delcat']) { ?>
<li<?=$menuactive['categories']?>><a href="<?=CPURL?>?action=categories">资讯分类</a></li>
<?php } ?>

<?php if($models) { ?>
<?php if(is_array($models)) { foreach($models as $value) { ?>
<?php if(checkperm('allowmanage', 0, $_SGLOBAL['member']['groupid'], $value['modelname'])) { ?>
<?php if($menus['1']['modcat'] || $menus['1']['editcat'] || $menus['1']['delcat']) { ?>
<li><a href="<?=CPURL?>?action=modelcategories&mid=<?=$value['mid']?>"><?=$value['modelalias']?>分类</a></li>
<?php } ?>
<?php } ?>
<?php } } ?>
<?php } ?>
<?php if($menus['1']['check']) { ?>
<li<?=$menuactive['check']?>><a href="<?=CPURL?>?action=check">资讯等级审核</a></li>
<?php } ?>

<?php if($models) { ?>
<?php if(is_array($models)) { foreach($models as $value) { ?>
<?php if(checkperm('allowmanage', 0, $_SGLOBAL['member']['groupid'], $value['modelname'])) { ?>
<?php if($menus['1']['folder']) { ?>
<li><a href="<?=CPURL?>?action=modelfolders&mid=<?=$value['mid']?>"><?=$value['modelalias']?>等级审核</a></li>
<?php } ?>
<?php } ?>
<?php } } ?>
<?php } ?>
<?php if($menus['1']['postnews']) { ?>
<li<?=$menuactive['postnews']?>><a href="<?=CPURL?>?action=postnews">信息推送</a></li>
<?php } ?>

<?php if($menus['1']['click']) { ?>
<li<?=$menuactive['click']?>><a href="<?=CPURL?>?action=click">点击器</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['2']) { ?>
<div class="block style1" id="menus_2">
<h2>用户管理</h2>
<ul class="folder">
<?php if($menus['2']['member']) { ?>
<li<?=$menuactive['member']?>><a href="<?=CPURL?>?action=member">用户管理</a></li>
<?php } ?>

<?php if($menus['2']['usergroups']) { ?>
<li<?=$menuactive['usergroupsadd']?>><a href="<?=CPURL?>?action=usergroups&op=add">添加用户组</a></li>
<?php } ?>

<?php if($menus['2']['usergroups']) { ?>
<li<?=$menuactive['usergroups']?>><a href="<?=CPURL?>?action=usergroups">用户组</a></li>
<?php } ?>

<?php if($menus['2']['credit']) { ?>
<li<?=$menuactive['credit']?>><a href="<?=CPURL?>?action=credit">积分规则</a></li>
<?php } ?>

<?php if($menus['2']['delmembers']) { ?>
<li<?=$menuactive['delmembers']?>><a href="<?=CPURL?>?action=delmembers">恢复被禁用户</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['3']) { ?>
<div class="block style1" id="menus_3">
<h2>模块管理</h2>
<ul class="folder">
<?php if($menus['3']['blocks']) { ?>
<li<?=$menuactive['blocksadd']?>><a href="<?=CPURL?>?action=blocks&op=add">创建模块</a></li>
<?php } ?>

<?php if($menus['3']['blocks']) { ?>
<li<?=$menuactive['blocks']?>><a href="<?=CPURL?>?action=blocks">模块管理</a></li>
<?php } ?>

<?php if($menus['3']['styles']) { ?>
<li<?=$menuactive['stylesadd']?>><a href="<?=CPURL?>?action=styles&op=add">添加新风格</a></li>
<?php } ?>

<?php if($menus['3']['styles']) { ?>
<li<?=$menuactive['styles']?>><a href="<?=CPURL?>?action=styles">模块风格</a></li>
<?php } ?>

<?php if($menus['3']['styletpl']) { ?>
<li<?=$menuactive['styletpl']?>><a href="<?=CPURL?>?action=styletpl">风格模板</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['4']) { ?>
<div class="block style1" id="menus_4">
<h2>批量维护</h2>
<ul class="folder">
<?php if($menus['4']['items']) { ?>
<li<?=$menuactive['items']?>><a href="<?=CPURL?>?action=items">主题管理</a></li>
<?php } ?>

<?php if($menus['4']['comments']) { ?>
<li<?=$menuactive['comments']?>><a href="<?=CPURL?>?action=comments">评论管理</a></li>
<?php } ?>

<?php if($menus['4']['attachments']) { ?>
<li<?=$menuactive['attachments']?>><a href="<?=CPURL?>?action=attachments">上传附件管理</a></li>
<?php } ?>

<?php if($menus['4']['tags']) { ?>
<li<?=$menuactive['tags']?>><a href="<?=CPURL?>?action=tags">TAG管理</a></li>
<?php } ?>

<?php if($menus['4']['reports']) { ?>
<li<?=$menuactive['reports']?>><a href="<?=CPURL?>?action=reports">举报信息管理</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['5']) { ?>
<div class="block style1" id="menus_5">
<h2>采集管理</h2>
<ul class="folder">
<?php if($menus['5']['modrobot'] || $menus['5']['editrobot']) { ?>
<li<?=$menuactive['robotsadd']?>><a href="<?=CPURL?>?action=robots&op=add">添加新机器人</a></li>
<?php } ?>

<?php if($menus['5']['modrobot'] || $menus['5']['userobot'] || $menus['5']['editrobot'] || $menus['5']['delrobot']) { ?>
<li<?=$menuactive['robots']?>><a href="<?=CPURL?>?action=robots">采集器</a></li>
<?php } ?>

<?php if($menus['5']['modrobotmsg']) { ?>
<li<?=$menuactive['robotmessages']?>><a href="<?=CPURL?>?action=robotmessages">采集文章管理</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['6']) { ?>
<div class="block style1" id="menus_6">
<h2>模型管理</h2>
<ul class="folder">
<?php if($menus['6']['models']) { ?>
<li<?=$menuactive['modelsadd']?>><a href="<?=CPURL?>?action=models&op=add">新建模型</a></li>
<?php } ?>

<?php if($menus['6']['models']) { ?>
<li<?=$menuactive['models']?>><a href="<?=CPURL?>?action=models">模型管理</a></li>
<?php } ?>

<?php if($menus['6']['models']) { ?>
<li<?=$menuactive['modelsimport']?>><a href="<?=CPURL?>?action=models&op=import">模型备份</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['7']) { ?>
<div class="block style1" id="menus_7">
<h2>聚合设置</h2>
<ul class="folder">
<?php if($menus['7']['bbs']) { ?>
<li<?=$menuactive['bbs']?>><a href="<?=CPURL?>?action=bbs">论坛设置</a></li>
<?php } ?>

<?php if($menus['7']['bbsforums']) { ?>
<li<?=$menuactive['bbsforums']?>><a href="<?=CPURL?>?action=bbsforums">版块聚合</a></li>
<?php } ?>

<?php if($menus['7']['threads']) { ?>
<li<?=$menuactive['threads']?>><a href="<?=CPURL?>?action=threads">帖子批量聚合</a></li>
<?php } ?>

<?php if($menus['7']['uchome']) { ?>
<li<?=$menuactive['uchome']?>><a href="<?=CPURL?>?action=uchome">UCHome设置</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<script>cpmenus(<?=$acid?>);</script>