<!doctype html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
            integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
            crossorigin="anonymous"
    />
    <script
            src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"
            integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A"
            crossorigin="anonymous"
    ></script>
    <script>
        function copyUID() {
            const input = document.querySelector('#uid');
            input.select();
            document.execCommand("copy");
            mdui.snackbar({
                message: '已复制'
            });
        }
    </script>
    <title>四史学习 UID</title>
</head>
<body class="mdui-theme-layout-auto mdui-theme-primary-indigo mdui-theme-accent-pink mdui-container mdui-typo">
<h1 class="mdui-text-color-theme">获取 UID</h1>
<div class="mdui-textfield">
    <label class="mdui-textfield-label">UID</label>
    <input id="uid" class="mdui-textfield-input" type="text" value="<?php
    $data = json_decode($_GET['data'], true);
    echo $data['_id'];
?>"/>
</div>
<p><button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="copyUID()">复制</button></p>
</body>
</html>
