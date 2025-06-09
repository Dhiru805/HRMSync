<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Landing Page')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Landing Page')); ?></li>
<?php $__env->stopSection(); ?>

<?php
    $logo=\App\Models\Utility::get_file('uploads/logo');
    $settings = \Modules\LandingPage\Entities\LandingPageSetting::settings();
?>

<?php $__env->startPush('css-page'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/summernote/summernote-bs4.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-page'); ?>


<script src="<?php echo e(asset('css/summernote/summernote-bs4.js')); ?>"></script>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Landing Page')); ?></li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card sticky-top" style="top:30px">
                        <div class="list-group list-group-flush" id="useradd-sidenav">

                            <?php echo $__env->make('landingpage::layouts.tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                        </div>
                    </div>
                </div>

                <div class="col-xl-9">
                
                    <?php echo e(Form::model(null, array('route' => array('landingpage.store'), 'method' => 'POST', 'class' => 'needs-validation', 'novalidate'))); ?>

                    <?php echo csrf_field(); ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="mb-2"><?php echo e(__('Top Bar')); ?></h5>
                                    </div>
                                    <div class="col switch-width text-end">
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" data-toggle="switchbutton" data-onstyle="primary" class="" name="topbar_status"
                                                    id="topbar_status"  <?php echo e($settings['topbar_status'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                <label class="custom-control-label" for="topbar_status"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-12">
                                        <?php echo e(Form::label('content', __('Message'), ['class' => 'col-form-label text-dark'])); ?><?php if (isset($component)) { $__componentOriginaleab1765d328ab3f8835fc5d78676a070 = $component; } ?>
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
                                        <?php echo e(Form::textarea('topbar_notification_msg',$settings['topbar_notification_msg'], ['class' => 'summernote-simple form-control', 'required' => 'required', 'id'=>'mytextarea'])); ?>

                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-print-invoice btn-primary m-r-10" type="submit" value="<?php echo e(__('Save Changes')); ?>">
                            </div>
                        </div>
                    <?php echo e(Form::close()); ?>


                
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u661792259/domains/hrmsync.in/public_html/Modules/LandingPage/Resources/views/landingpage/topbar.blade.php ENDPATH**/ ?>