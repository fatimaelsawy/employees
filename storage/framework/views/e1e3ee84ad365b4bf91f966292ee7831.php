

<?php $__env->startSection('title', 'Employee'); ?>

<?php $__env->startSection('main'); ?>
    <div class="alert alert-primary text-center
     py-3 my-5 container w-50 fs-4">
     <?php echo e($employee->first_name . ' ' . $employee->last_name); ?>

        <div class="card text-bg-light mt-3">
            
            <div class="card-header">
                <strong class="text-warning"><?php echo e($employee->job); ?></strong>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    Salary: <?php echo e($employee->salary); ?>

                </h5>
                <hr>
                <p class="card-text">
                    <?php echo e($employee->phone_number); ?>

                </p>
                <hr>
                <div class="alert alert-secondary rounded py-3 my-3">
                    Hired At <?php echo e($employee->created_at->format('d-m-Y')); ?> By <br>
                </div>
                <hr>
                <a href="<?php echo e('/edit/'. $employee->id); ?>" class="btn btn-md btn-success my-2 mx-1">edit</a>
                <a href="<?php echo e('/delete/'. $employee->id); ?>" class="btn btn-md btn-danger my-2 mx-1">delete</a>
            </div>
            
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\omar\Desktop\laravel projects\emplyees\resources\views/pages/show.blade.php ENDPATH**/ ?>