

<?php $__env->startSection('title' , 'Create Event Page'); ?>

<?php $__env->startSection('main'); ?>
    <div class="alert alert-primary text-center
     py-3 my-5 container w-50 fs-4">
        Create New Event 
    </div>

    <div class="container my-5 w-50 mx-auto">
        <form action="/store" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group my-3">
                <label for="title">Event Title</label>
                <input type="text" class="form-control" 
                id="title" name="title"></div>
            <div class="form-group my-3">
                <label for="speaker">Event Speaker</label>
                <input type="text" class="form-control"
                 id="speaker" name="speaker"></div>
            <div class="form-group my-3">
                <label for="price">Event Price</label>
                <input type="number" class="form-control" id="price" name="price"></div>
            <div class="form-group my-3">
                <label for="desc">Event Description</label>
                <textarea type="text" class="form-control" id="desc" 
                name="desc"></textarea>
            </div>
            <input type="submit" value="Add Event" class="btn btn-dark my-2">
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\omar\Desktop\laravel projects\emplyees\resources\views/pages/create.blade.php ENDPATH**/ ?>