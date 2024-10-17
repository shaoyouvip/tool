<?php /*a:1:{s:80:"/usr/home/shaoyou8/domains/tool.aizrf.com/application/admin/view/index/main.html";i:1722924448;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>后台首页</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/layui/2.7.6/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/style.css">
</head>
<body class="p20">


<blockquote class="layui-elem-quote"><h2>工具网后台管理</h2></blockquote>

<div class="layui-col-xs12 layui-col-sm8">
    <div class="layui-card">
        <div class="layui-card-header"><i class="layui-icon layui-icon-about"></i>&nbsp;&nbsp;服务器信息</div>
        <div class="layui-card-body layui-text" id="system_info"> <table class="layui-table"> <colgroup> <col> <col> </colgroup> <tbody> <tr> <td>框架版本</td> <td><?php echo htmlentities($info['framework_version']); ?></td> </tr> <tr> <td>PHP版本</td> <td><?php echo htmlentities($info['php_version']); ?></td> </tr> <tr> <td>WEB软件</td> <td><?php echo htmlentities($info['software']); ?></td> </tr> <tr> <td>操作系统</td> <td><?php echo htmlentities($info['os']); ?></td> </tr> <tr> <td>服务器时间</td> <td><?php echo htmlentities($info['date']); ?></td> </tr> </tbody> </table> </div>
    </div>
</div>
</body>
</html>