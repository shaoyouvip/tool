<?php /*a:1:{s:83:"/usr/home/shaoyou8/domains/tool.aizrf.com/application/admin/view/index/account.html";i:1722924448;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>修改密码</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/layui/2.7.6/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.7.6/layui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="p20">


<fieldset class="layui-elem-field layui-field-title">
    <legend>修改密码</legend>
</fieldset>
<form class="layui-form" action="?" method="POST">
    <div class="layui-form-item">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-block">
            <input type="text" name="username" value="<?php echo htmlentities($config['username']); ?>" placeholder="" class="layui-input" lay-verify="required" lay-reqtext="用户名不能为空">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">旧密码</label>
        <div class="layui-input-block">
            <input type="password" name="oldpwd" value="" placeholder="请输入当前管理员的密码" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">新密码</label>
        <div class="layui-input-block">
            <input type="password" name="newpwd" value="" placeholder="不修改请留空" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">重复新密码</label>
        <div class="layui-input-block">
            <input type="password" name="newpwd2" value="" placeholder="不修改请留空" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="submit">确认修改</button>
        </div>
    </div>
</form>

<script>
    layui.use(['form'], function () {
        var form = layui.form,
            layer = layui.layer,
            $ = layui.$;

        //监听提交
        form.on('submit(submit)', function (data) {
            var ii = layer.load(1);
            $.ajax({
                url: '/admin/index/account',
                type: 'post',
                dataType: 'json',
                data: data.field,
                success: function (res) {
                    layer.close(ii)
                    if (res.code === 0) {
                        layer.msg(res.msg, {icon: 1, time: 800}, function(){ top.location.reload() })
                    }else{
                        layer.alert(res.msg, {icon: 2})
                    }
                }
            });
            return false;
        });

    });
</script>
</body>
</html>