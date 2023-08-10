<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('View Post')); ?></div>
                

                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>

                    <h2><?php echo e($post->title); ?></h2>

                    <p>Published At: <?php echo e(date('Y-m-d', strtotime($post->published_at))); ?></p>
                    <br>
                    <div>
                        <?php echo e($post->body); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-primary" href="<?php echo e(route('home')); ?>"> Back</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp824\htdocs\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>