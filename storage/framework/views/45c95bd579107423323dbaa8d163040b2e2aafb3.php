<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cent</title>
        <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
        <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

        
        <?php echo $__env->yieldPushContent('before-style'); ?>
        <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldPushContent('after-style'); ?>
    </head>

    <body>
        
        <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            
            <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Content -->
            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- /.content -->
            <div class="clearfix"></div>

        </div>
        <!-- /#right-panel -->

        
        <?php echo $__env->yieldPushContent('before-script'); ?>
        <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldPushContent('after-script'); ?>
    </body>

</html>
<?php /**PATH E:\Hallo Dek\Cent\resources\views/layouts/default.blade.php ENDPATH**/ ?>