<form method="post" action="<?php echo e(route('test.send.mail')); ?>" id="test_email">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="mail_driver" value="<?php echo e($data['mail_driver']); ?>" />
    <input type="hidden" name="mail_host" value="<?php echo e($data['mail_host']); ?>" />
    <input type="hidden" name="mail_port" value="<?php echo e($data['mail_port']); ?>" />
    <input type="hidden" name="mail_username" value="<?php echo e($data['mail_username']); ?>" />
    <input type="hidden" name="mail_password" value="<?php echo e($data['mail_password']); ?>" />
    <input type="hidden" name="mail_encryption" value="<?php echo e($data['mail_encryption']); ?>" />
    <input type="hidden" name="mail_from_address" value="<?php echo e($data['mail_from_address']); ?>" />
    <input type="hidden" name="mail_from_name" value="<?php echo e($data['mail_from_name']); ?>" />
    <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-12">
                <label for="email" class="form-label"><?php echo e(__('E-Mail Address')); ?></label><?php if (isset($component)) { $__componentOriginaleab1765d328ab3f8835fc5d78676a070 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleab1765d328ab3f8835fc5d78676a070 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.required','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('required'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleab1765d328ab3f8835fc5d78676a070)): ?>
<?php $attributes = $__attributesOriginaleab1765d328ab3f8835fc5d78676a070; ?>
<?php unset($__attributesOriginaleab1765d328ab3f8835fc5d78676a070); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleab1765d328ab3f8835fc5d78676a070)): ?>
<?php $component = $__componentOriginaleab1765d328ab3f8835fc5d78676a070; ?>
<?php unset($__componentOriginaleab1765d328ab3f8835fc5d78676a070); ?>
<?php endif; ?>
                <input type="text" class="form-control" id="email" name="email" placeholder="<?php echo e(__('Enter E-Mail Address')); ?>" required />
            </div>
        </div>
        <div class="modal-footer">
            <label id="email_sending" style="display: none;"><i class="fas fa-clock"></i></label>
            <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn btn-secondary btn-light"
                data-bs-dismiss="modal">
            <input type="submit" value="<?php echo e(__('Send Test Mail')); ?>" class="btn-create btn btn-primary">
        </div>
    </div>
</form>
<?php /**PATH /home/u661792259/domains/hrmsync.in/public_html/resources/views/setting/test_mail.blade.php ENDPATH**/ ?>