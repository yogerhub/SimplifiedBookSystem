<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy">


    <title>laravel for blog</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/wangEditor.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <a class="blog-nav-item " href="/posts">首页</a>
            </li>
            <li>
                <a class="blog-nav-item" href="/posts/create">写文章</a>
            </li>
            <li>
                <a class="blog-nav-item" href="/notices">通知</a>
            </li>
            <li>
                <input name="query" type="text" value="" class="form-control" style="margin-top:10px" placeholder="搜索词">
            </li>
            <li>
                <button class="btn btn-default" style="margin-top:10px" type="submit">Go!</button>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <div>
                    <img src="/storage/9f0b0809fd136c389c20f949baae3957/iBkvipBCiX6cHitZSdTaXydpen5PBiul7yYCc88O.jpeg"
                         alt="" class="img-rounded" style="border-radius:500px; height: 30px">
                    <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Kassandra Ankunding2 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/user/5">我的主页</a></li>
                        <li><a href="/user/5/setting">个人设置</a></li>
                        <li><a href="/logout">登出</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="container">

    <div class="blog-header">
    </div>

    <div class="row">

        <div class="col-sm-8">
            <blockquote>
                <p>旅游</p>
                <footer>文章：4</footer>
                <button class="btn btn-default topic-submit" data-toggle="modal" data-target="#topic_submit_modal"
                        topic-id="1" _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" type="button">投稿
                </button>
            </blockquote>
        </div>
        <div class="modal fade" id="topic_submit_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">我的文章</h4>
                    </div>
                    <div class="modal-body">
                        <form action="/topic/1/submit">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="post_ids[]" value="56">
                                    dfdasfd
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="post_ids[]" value="57">
                                    反对撒发的撒风反对撒发的撒风反对撒发的撒风
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="post_ids[]" value="58">
                                    自动放大舒服的撒
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="post_ids[]" value="59">
                                    你好你好
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="post_ids[]" value="60">
                                    你好你好
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="post_ids[]" value="61">
                                    你好你好
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="post_ids[]" value="62">
                                    你好你好
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">投稿</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8 blog-main">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="blog-post" style="margin-top: 30px">
                            <p class=""><a href="/user/5">Kassandra Ankunding2</a> 1个月前</p>
                            <p class=""><a href="/posts/55">32323</a></p>

                            <p>232323232323232323232323232323232323232323232323232323
                                232323232323232323232323
                                232323232323232323...</p>
                        </div>
                        <div class="blog-post" style="margin-top: 30px">
                            <p class=""><a href="/user/5">Kassandra Ankunding2</a> 1个月前</p>
                            <p class=""><a href="/posts/54">dafdsafads</a></p>

                            <p>dafdsafadsdafdsafadsdafdsafadsdafdsafads

                                dafdsafadsdafdsafadsdafdsafadsdafdsafadsdafdsafadsdafdsa...</p>
                        </div>
                        <div class="blog-post" style="margin-top: 30px">
                            <p class=""><a href="/user/51">Libbie Grant</a> 1个月前</p>
                            <p class=""><a href="/posts/1">Provident ipsa omnis suscipit iusto repellendus impedit
                                    consectetur perspiciatis.</a></p>

                            <p>Consequatur quam at amet omnis sit explicabo eos. Molestiae temporibus libero quasi rem
                                qui. Optio s...</p>
                        </div>
                        <div class="blog-post" style="margin-top: 30px">
                            <p class=""><a href="/user/52">Edison Reynolds</a> 1个月前</p>
                            <p class=""><a href="/posts/2">Officia deleniti ut repellendus et qui laudantium voluptas
                                    nobis.</a></p>

                            <p>Officiis optio sed aliquam. Exercitationem id voluptatem sint minus quasi. Aliquid
                                placeat et eos vo...</p>
                        </div>
                    </div>

                </div>
                <!-- /.tab-content -->
            </div>


        </div><!-- /.blog-main -->


        @include('layout.sidebar')
    </div>
</div><!-- /.row -->
</div><!-- /.container -->