

<?php $__env->startSection('title', 'Add Employee Page'); ?>

<?php $__env->startSection('main'); ?>
    <div class="alert alert-primary text-center
     py-3 my-5 container w-50 fs-4">
        Add New Employee
    </div>

    <div class="container my-5 w-50 mx-auto">
        <form action=<?php echo e('/update-employee/'. $employee->id); ?> method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group my-3">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first-name" name="first_name" value=<?php echo e($employee->first_name); ?>>
            </div>

            <div class="form-group my-3">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last-name" name="last_name" value=<?php echo e($employee->last_name); ?>>
            </div>

            <div class="form-group my-3">
                <label for="job">Job</label>
                <input type="text" class="form-control" id="job" name="job" value=<?php echo e($employee->job); ?>>
            </div>
            <div class="form-group my-3">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value=<?php echo e($employee->phone_number); ?>>
            </div>

            <div class="form-group my-3">
                <label for="salary">Salary</label>
                <input type="number" class="form-control" id="salary" name="salary" value=<?php echo e($employee->salary); ?>>
            </div>

            <div class="form-group my-3">
                <label for="desc">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" value=<?php echo e($employee->gender); ?>></input>
            </div>

            <input type="submit" value="Add Employee" class="btn btn-dark my-2">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\omar\Desktop\laravel projects\emplyees\resources\views/pages/edit.blade.php ENDPATH**/ ?>