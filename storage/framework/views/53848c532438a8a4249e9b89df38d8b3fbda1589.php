<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Friends</h3>

    <ul>
        <?php $__currentLoopData = range(1, 8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-4">
                <div class="flex items-center text-sm">
                    <img
                        src="https://i.pravatar.cc/40"
                        alt=""
                        class="rounded-full mr-2"
                    >

                    John Doe
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /Users/imac/code/tweety/resources/views/_friends-list.blade.php ENDPATH**/ ?>