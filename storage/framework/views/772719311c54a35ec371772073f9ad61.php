<?php echo e(Form::model(null, array('route' => array('faq_update', $key), 'method' => 'POST','enctype' => "multipart/form-data", 'class' => 'needs-validation', 'novalidate'))); ?>

<div class="modal-body">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?php echo e(Form::label('questions', __('Questions'), ['class' => 'form-label'])); ?><?php if (isset($component)) { $__componentOriginaleab1765d328ab3f8835fc5d78676a070 = $component; } ?>
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
                <?php echo e(Form::text('faq_questions',$faq['faq_questions'], ['class' => 'form-control ', 'required' => 'required', 'placeholder' => __('Enter Questions')])); ?>

            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <?php echo e(Form::label('answer', __('Answer'), ['class' => 'form-label'])); ?>

                <?php echo e(Form::textarea('faq_answer', $faq['faq_answer'], ['class' => 'form-control summernote-simple', 'placeholder' => __('Enter Answer'), 'id'=>'mytextarea'])); ?>

            </div>
        </div>

    </div>
</div>
<div class="modal-footer">
    <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Update')); ?>" class="btn  btn-primary">
</div>
<?php echo e(Form::close()); ?>


<?php /**PATH /home/u661792259/domains/hrmsync.in/public_html/Modules/LandingPage/Resources/views/landingpage/faq/edit.blade.php ENDPATH**/ ?>