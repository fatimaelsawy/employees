

<?php $__env->startSection('title', 'Employees Page'); ?>

<?php $__env->startSection('main'); ?>
    <div class="alert alert-info text-center py-3 my-5 container w-50 fs-4">
        All Employees
    </div>

    <div class="container text-center my-5 ">
        <?php if(count($employees) > 0): ?>
            <div class="row">
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="card text-bg-light mb-3" style="max-width: 25rem;">
                            <div class="card-header">
                                <?php echo e($employee->first_name . ' ' . $employee->last_name); ?>

                            </div>
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
                                <a href="<?php echo e('employees/' . $employee->id); ?>" class="btn btn-md btn-primary my-2 mx-1">show</a>
                                <a href="<?php echo e('edit/' . $employee->id); ?>" class="btn btn-md btn-success my-2 mx-1">edit</a>
                                <a href="<?php echo e('delete/'. $employee->id); ?>" class="btn btn-md btn-danger my-2 mx-1">delete</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        <?php endif; ?>
        <div class="row my-4 d-flex justify-content-center">
            <?php echo e($employees->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\omar\Desktop\laravel projects\emplyees\resources\views/pages/employees.blade.php ENDPATH**/ ?>