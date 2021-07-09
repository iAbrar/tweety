<?php $__env->startSection('content'); ?>
    <div class="lg:flex lg:justify-center">
        <div class="lg:w-32">
            <?php echo $__env->make('_sidebar-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="lg:flex-1 lg:mx-10 lg:mb-10" style="max-width: 700px">
            <?php echo $__env->make('_publish-tweet-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="border border-gray-300 rounded-lg">
                
            </div>
        </div>

        <div class="lg:w-1/6">
            <?php echo $__env->make('_friends-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/imac/code/tweety/resources/views/home.blade.php ENDPATH**/ ?>