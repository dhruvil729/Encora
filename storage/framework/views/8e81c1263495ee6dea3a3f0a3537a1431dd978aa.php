 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('user.create')); ?>"> Add User</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        <?php if(!empty($users)): ?>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td>
                <form action="<?php echo e(route('user.destroy',$user->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('user.show',$user->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('user.edit',$user->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <tr><td colspan="4">No records found</td></tr>
        <?php endif; ?>
    </table>
  
    <?php echo $users->links(); ?>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp824\htdocs\blog\resources\views/user/index.blade.php ENDPATH**/ ?>