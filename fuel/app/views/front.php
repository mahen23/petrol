<!DOCTYPE html>
<html>
    <head>
        <title>Petrol - a blog example</title>
        <?php echo Asset::css('style.css'); ?>
    </head>
    <body>
        <div class="logo">
            <h1><a class="link" href="../index">PETROL</a>
                <sub class="fork"><a href="https://github.com/mahen23/petrol">Fork on Github</a></sub></h1>
        </div>
        <div class="header">
            <div class="menubar">
                <div class="menu_item"><?php echo Html::anchor('articles/admin', 'Admin'); ?></div>
                <div class="menu_item"><?php echo Html::anchor('articles/index', 'All articles'); ?></div>
                <div class="menu_item"><?php echo Html::anchor('categories/index', 'All Categories'); ?></div>                
            </div>
        </div>
        
        <div class="content">
            <?php if (Session::get_flash('message')): ?>
            <p><?php echo Session::get_flash('message'); ?></p>
            <?php endif; ?>
            <?php echo $content; ?>
        </div>
        
        <div class="footer">
            <div class="top">Page rendered in {exec_time}s | Memory Usage {mem_usage}MB</div>
            <div class="bottom">Based on orginal code by <a href="http://www.aplusm.me/">Abdelrahman Mahmoud</a> 
                and <a href="http://alfierivera.com">Alfredo Rivera</a> <strong>Improved by <a href='http://twitter.com/mahen23'>Mahen23</a></strong>.</div>
        </div>
    </body>
</html>
