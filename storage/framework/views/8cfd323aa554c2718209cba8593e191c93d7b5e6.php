<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        <?php echo csrf_field(); ?>

        <textarea
            name="body"
            class="w-full"
            placeholder="What's up doc?"
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="<?php echo e(auth()->user()->avatar); ?>"
                alt="your avatar"
                class="rounded-full mr-2"
            >

            <button
                type="submit"
                class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
            >
                Tweet-a-roo!
            </button>
        </footer>
    </form>

    <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-sm mt-2"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH /Users/imac/code/tweety/resources/views/_publish-tweet-panel.blade.php ENDPATH**/ ?>