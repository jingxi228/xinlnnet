<?php
// 简单首页示例
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>首页 - 我的PHP网站</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; margin: 0; }
        .container { max-width: 600px; margin: 80px auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
        h1 { color: #333; }
        p { color: #555; }
        a { color: #1e90ff; text-decoration: none;}
        a:hover { text-decoration: underline;}
    </style>
</head>
<body>
    <div class="container">
        <h1>欢迎来到我的首页！</h1>
        <p>这是一个用PHP编写的简单首页示例。</p>
        <p>当前时间：<?php echo date('Y-m-d H:i:s'); ?></p>
        <p>
            <a href="about.php">关于我们</a> |
            <a href="contact.php">联系我们</a>
        </p>
    </div>
</body>
</html>
