<nav class="navbar navbar-expand-lg py-4 px-4 bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><i class="fa-brands fa-laravel"></i> <?php echo e(env('APP_NAME')); ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link mx-1" href="<?php echo e(route('home')); ?>">Home</a>
          <a class="nav-link mx-1" href="<?php echo e(route('employees')); ?>">Employees</a>
          <a class="nav-link mx-1" href="<?php echo e(route('store')); ?>">Add Employee</a>
        </div>
      </div>
    </div>
</nav><?php /**PATH C:\Users\omar\Desktop\laravel projects\emplyees\resources\views/includes/navbar.blade.php ENDPATH**/ ?>