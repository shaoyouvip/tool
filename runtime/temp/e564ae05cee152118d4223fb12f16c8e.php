<?php /*a:1:{s:81:"/usr/home/shaoyou8/domains/tool.aizrf.com/application/admin/view/index/index.html";i:1722924448;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>后台首页</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/layui/2.7.6/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.7.6/layui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.14/vue.min.js"></script>
    <script src="/static/admin/js/config.js"></script>
</head>
<body>

<div id="app">
    <!--顶栏-->
    <header>
        <h1 v-text="webname"></h1>
        <div class="breadcrumb">
            <i class="layui-icon">&#xe715;</i>
            <ul>
                <li v-for="vo in address">
                    <a v-text="vo.name" :href="vo.url"></a> <span>/</span>
                </li>
            </ul>
        </div>
    </header>

    <div class="main">
        <!--左栏-->
        <div class="left">
            <ul class="cl">
                <!--顶级分类-->
                <li v-for="vo,index in menu" :class="{hidden:vo.hidden}">
                    <a href="javascript:;" :class="{active:vo.active}" @click="onActive(index)">
                        <i class="layui-icon" v-html="vo.icon"></i>
                        <span v-text="vo.name"></span>
                        <i class="layui-icon arrow" v-show="vo.url.length==0">&#xe61a;</i> <i v-show="vo.active"
                                                                                              class="layui-icon active">&#xe623;</i>
                    </a>
                    <!--子级分类-->
                    <div v-for="vo2,index2 in vo.list">
                        <a :href="vo2.url" target="main" :class="{active:vo2.active}" v-text="vo2.name"></a>
                        <i v-show="vo2.active" class="layui-icon active">&#xe623;</i>
                    </div>
                </li>
            </ul>
        </div>

        <!--右侧-->
        <div class="right">
            <iframe src="./main.html" name="main" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto" target="_self"></iframe>
        </div>
    </div>
</div>

<script src="/static/admin/js/script.js"></script>
</body>
</html>