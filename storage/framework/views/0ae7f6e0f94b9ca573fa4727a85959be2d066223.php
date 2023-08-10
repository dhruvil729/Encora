<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Posts Module</h2>
            </div>

            <div class="pull-right">
                <a href="posts/create" class="btn btn-success mb-2">Create Post</a>
            </div>
        </div>
    </div>
            <br>

            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
            <?php endif; ?>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Published At</th>
                        <th>Created at</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($posts->isNotEmpty()): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($post->title); ?></td>
                        <td><?php echo e(date('Y-m-d', strtotime($post->published_at))); ?></td>
                        <td><?php echo e(date('Y-m-d', strtotime($post->created_at))); ?></td>
                        <td style="display:inline-flex;">
                            <a href="posts/<?php echo e($post->id); ?>" class="btn btn-primary ml-1">Show</a>
                            <a href="posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary ml-1">Edit</a>
                            <form action="posts/<?php echo e($post->id); ?>" method="post" class="d-inline ml-1">
                                <?php echo e(csrf_field()); ?>

                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <tr><td colspan="5">No posts found</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp824\htdocs\posts\resources\views/posts/index.blade.php ENDPATH**/ ?>