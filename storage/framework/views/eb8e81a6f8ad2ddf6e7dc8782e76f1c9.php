

<?php $__env->startSection('title' , 'Events Page'); ?>

<?php $__env->startSection('main'); ?>
    <div class="alert alert-info text-center py-3 my-5 container w-50 fs-4">
        All Events
    </div>

    <div class="container text-center my-5 ">
        <?php if(count($events) > 0): ?> 
            <div class="row">
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="card text-bg-light mb-3"
                         style="max-width: 25rem;">
                            <div class="card-header">
                                <?php echo e($event->title); ?>

                            </div>
                            <div class="card-body">
                              <h5 class="card-title">
                                Event Price <?php echo e($event->price); ?>

                              </h5>
                              <hr>
                              <p class="card-text">
                                <?php echo e($event->desc); ?>

                              </p>
                              <hr>
                              <div class="alert alert-secondary rounded py-3 my-3">
                                Created At <?php echo e($event->created_at); ?> By <br>
                                <strong class="text-warning"><?php echo e($event->speaker); ?></strong>
                              </div>
                              <hr>
                              <a href="" class="btn btn-md btn-primary my-2 mx-1">show</a>
                              <a href="" class="btn btn-md btn-success my-2 mx-1">edit</a>
                              <a href="" class="btn btn-md btn-danger my-2 mx-1">delete</a>
                            </div>
                          </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        <?php endif; ?>
        <div class="row my-4 d-flex justify-content-center">
            <?php echo e($events->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\instructor\Desktop\laravel-demo\resources\views/pages/events.blade.php ENDPATH**/ ?>