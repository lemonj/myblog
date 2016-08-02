<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<!--
            ,----------------,              ,---------,
       ,-----------------------,          ,"        ,"|
    , "                      ,"|        ,"        ,"  |
    +-----------------------+  |      ,"        ,"    |
    |  .-----------------.  |  |     +---------+      |
    |  |                 |  |  |     | -==----'|      |
    |  |  I LOVE DOS!    |  |  |     |         |      |
    |  |  Bad command or |  |  |/----|`---=    |      |
    |  |  C:\>_          |  |  |   ,/|==== ooo |      ;
    |  |                 |  |  |  // |(((( [33]|    ,"
    |  `-----------------'  |," .;'| |((((     |  ,"
    +-----------------------+  ;;  | |         |,"
       /_)______________(_/  //'   | +---------+
   ___________________________/___  `,
  /  oooooooooooooooo  .o.  oooo /,   \,"-----------
 / ==ooooooooooooooo==.o.  ooo= //   ,`\--{)B     ,"
/_==__==========__==_ooo__ooo=_/'   /___________,"

//-->

<!--
感谢极客学院Terry Lee公布的简历模板

原模板网址:http://www.gbtags.com/gb/demoviewer/3568/b8c4a67f-b20c-45f2-b9ba-c4cf060eb569/bs.html.htm
//-->
<head>
    <meta charset="UTF-8">
    <title>王小钧个人简历 - lemonyu.com</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>

        /* 定义辅助CSS来美化简历头部 */
        body{
            font-family: 'microsoft yahei',Arial,sans-serif;
        }

        .cvheader{
            border-bottom: 1px solid #DFDFDF;
            padding-top:30px;
            padding-bottom:20px;
        }

        .cvheader h1{
            margin:0;
        }

        .address{
            background: #efb73e;
            color: #fff;
            padding: 10px 0;
        }

        /* 定义辅助CSS来美化简历主体 */

        .cvbody{
            padding-top: 50px;
        }

        .cbox{
            margin-bottom: 30px;
            color: #FFF;
            padding: 50px;
        }

        /* 定义cbox颜色 */
        .green{
            background: #2ecc71;
        }

        .orange{
            background: orange;
        }

        .red{
            background: #dd4814;
        }

        .bbox{
            border: 1px solid #DFDFDF;
            border-radius: 5px;
            margin-bottom:30px;
            padding: 50px;
        }

        .footer{
            margin: 30px 0 30px;
            padding: 50px;
            background: #CCC;
            color: #FFF;
        }
    </style>
</head>
<body>
<!-- 定义简历的头部 //-->

<div class="container">
    <div class="row cvheader">
        <div class="col-lg-7 col-md-7 col-xs-12">
            <!--  添加颜色//-->
            <h1 class="text-primary">王培钧</h1>
            <!--  添加图标 //-->
            <p><span class="glyphicon glyphicon-paperclip"></span> PHP工程师 </p>
        </div>

        <div class="col-lg-3 col-md-3 col-xs-12">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-xs-4">
                    <p id="contact" class="address text-center">联系</p>
                </div>

                <div class="col-lg-8 col-md-8 col-xs-8">
                    <p><span class="glyphicon glyphicon-envelope"></span> onedan123@126.com</p>
                    <p><span class="glyphicon glyphicon-earphone"></span> 15561755234</p>
                    <p><span class="glyphicon glyphicon-road"></span> 北京市海淀区海淀黄庄</p>
                </div>

            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-xs-12">
            <p>
                <!-- 这里定义图片为响应式，并且添加圆角效果，以便保证图片在不同设备上都可以完美显示 //-->
                <img data-toggle="tooltip" data-placement="left" id="avatar" title="Jun" class="img-responsive img-rounded" src="http://pic.58pic.com/58pic/15/53/82/50658PIC2kb_1024.png" alt="">
            </p>
        </div>
    </div>
</div>

<!-- 定义简历的主体部分 //-->

<div class="container">
    <div class="row cvbody">

        <!-- 这里定义两个区域，布局定义如下：//-->

        <div class="col-lg-6 col-md-6 col-xs-12">

            <div class="row">
                <div class="cbox green">
                    <h4>个人介绍</h4>
                    <p>
                        具有良好的代码编写习惯，喜欢学习新技术，具备编码及排错能力，具备良好的团队合作精神和沟通能力。 对于公司给予的工作能按时完成，与同事关系融洽，对新的技术有较强的求知欲。可以独立搭建LAMP/WAMP/LNMP等开发环境。熟悉LINUX的基本命令。对客户的需求分析文档。对中小型网站可以独立开发。
                    </p>
                </div>
                <div class="cbox red">
                    <h4>个人技能</h4>
                    <p>
                    <!-- 这里使用Bootstrap3的组件添加技能 //-->

                    HTML/CSS/Javascript
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-success" style="width:70%"></div>
                    </div>

                    php
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-primary" style="width:90%"></div>
                    </div>

                    数据库(设计/优化)
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-info" style="width:80%"></div>
                    </div>

                    NoSql(mongodb,redis)/memcache/memcached
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-warning" style="width:60%"></div>
                    </div>

                    CI,Phalcon,ThinkPhP,Smarty
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" style="width:80%"></div>
                    </div>

                    SphinxSE
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-inverse" style="width:70%"></div>
                    </div>

                    </p>
                </div>
                <div class="cbox orange">
                    <h4>语言水平</h4>
                    <p>
                        <canvas id="en" width="150" height="150" class="pull-left"></canvas>
                        <canvas id="zh" width="150" height="150" class="pull-right"></canvas>
                    <p class="clearfix"></p>
                    </p>
                </div>
            </div>

        </div>

        <!-- 为了清楚的分割两个区域，这里我们添加了一个空白区域，或者也可以在CSS中定义Margin实现//-->
        <div class="col-lg-1 col-md-1 col-xs-12"></div>

        <div class="col-lg-5 col-md-5 col-xs-12">

            <div class="row">

                <div class="bbox">
                    <h4>工作经验</h4>
                    <p>2013/08 -- 至今</p>
                    <p>爱卡汽车网|PHP 工程师</p>
                    <p>行业类别： 互联网/电子商务|规模：500-999人</p>
                    <p>工作描述：负责bbs/myxcar组的 myxcar用户管理网站的前后台功能，用户意见反馈后台及用户管理后台的开发及维护，主站(my)线上维护，代码调优，优化sql等工作，根据需求为其他小组提供数据接口及技术支持等。及根据产品新需求开发对应新功能。</p>
                    <p>主要项目地址为：http://my.xcar.com.cn  <span style="margin-left: 112px;">http://tuan.xcar.com.cn</span></p>
                </div>

                <div class="bbox">
                    <h4>教育背景</h4>
                    <p>2011/02 -- 2013/07</p>
                    <p>北京市八维研修学院|软件工程专业|大专|非统招</p>
                </div>

                <div class="bbox">
                    <h4>个人爱好</h4>
                    <p>
                        <span class="glyphicon glyphicon-book"></span> 看书
                        <span class="glyphicon glyphicon-plane"></span> 旅游
                    </p>
                    <p><span class="glyphicon glyphicon-cutlery"></span> 美食</p>
                    <p><span class="glyphicon glyphicon-headphones"></span> 音乐</p>
                    </p>
                </div>
            </div>

        </div>


    </div>
</div>

<!-- 定义简历页底 //-->
<div class="container">
    <div class="row">
        <div class="footer text-center"  style="background-color: #232323;">
            <ul class="list-inline">
                <li><a href="http://php.net/docs.php" target="_blank">PHP</a></li>
                <li><a href="http://www.w3school.com.cn/" target="_blank">W3C</a></li>
                <li><a href="https://docs.phalconphp.com/zh/latest/reference/odm.html" target="_blank">Phalcon</a></li>
                <li><a href="http://tool.chinaz.com/Tools/unixtime.aspx" target="_blank">Unix timestamp</a></li>
                <li><a href="http://doc.redisfans.com/" target="_blank">Redis</a></li>
                <li><a href="http://www.runoob.com/mongodb/mongodb-tutorial.html" target="_blank">MongoDB</a></li>
                <li><a href="http://bootstrap.ninghao.net/getting-started.html" target="_blank">BootStrop</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- 引入jQuery类库和Bootstrap3的Javascript类库 //-->
<script type='text/javascript' src="http://libs.baidu.com/jquery/1.11.1/jquery.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
    /*Javascript源代码*/

    $(function(){
        $('#contact').popover({placement:'bottom', container: 'body', html:true, content:'<p>Email: onedan123@126.com</p>'});
        $('#avatar').tooltip({'placement':'bottom'});

        //某插件?
        $.getScript('http://www.chartjs.org/assets/Chart.js',function(){

            var zhdata = [{
                label: '中文水平',
                value: 90,
                highlight: "#FFC870",
                color: "#F7464A"
            }, {
                value: 10,
                color: "#EEEEEE"
            }
            ]

            var zhoptions = {
                animation: true,
                segmentShowStroke : false
            };

            var c = $('#zh');
            var ct = c.get(0).getContext('2d');

            var zhChart = new Chart(ct).Doughnut(zhdata, zhoptions);


            var endata = [{
                label: '英文水平',
                value: 70,
                highlight: "#5AD3D1",
                color: "#4D5360"
            }, {
                value: 20,
                color: "#EEEEEE"
            }
            ]

            var enoptions = {
                animation: true,
                segmentShowStroke : false
            };

            var c = $('#en');
            var ct = c.get(0).getContext('2d');

            var enchart = new Chart(ct).Doughnut(endata, enoptions);
        });

    });

</script>
</body>
</html>