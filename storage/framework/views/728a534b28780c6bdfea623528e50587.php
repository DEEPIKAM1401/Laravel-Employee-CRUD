
<?php $__env->startSection('content'); ?>
<!-- <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger">
            <?php echo e($error); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?> -->
<a class="text-light" href="<?php echo e(route('employee.index')); ?>">Back to list</a>
        <div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Create New Employee</p>
                <form action="<?php echo e(route('employee.store')); ?>" class="was-validated" method="POST" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="form-group has-validation">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control <?php echo e($errors->has('name')?'is-invalid':''); ?>" required value="<?php echo e(old('name')); ?>">
                        <?php if($errors->has('name')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group has-validation">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" class="form-control <?php echo e($errors->has('email')?'is-invalid':''); ?>" required>
                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control <?php echo e($errors->has('phone')?'is-invalid':''); ?>" value="<?php echo e(old('phone')); ?>" required>
                        <?php if($errors->has('phone')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('phone')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="joining_date">Joining date</label>
                        <input type="date" name="joining_date" id="joining_date" value="<?php echo e(old('joining_date')); ?>" class="form-control <?php echo e($errors->has('joining_date')?'is-invalid':''); ?>" required>
                        <?php if($errors->has('joining_date')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('joining_date')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="joining_salary">Joining salary</label>
                        <input type="number" name="salary" id="joining_salary" value="<?php echo e(old('salary')); ?>" class="form-control <?php echo e($errors->has('salary')?'is-invalid':''); ?>" required>
                        <?php if($errors->has('salary')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('salary')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="is_active">Active</label><br>
                        <input type="checkbox" name="is_active" id="is_active" class="form-control <?php echo e($errors->has('is_active')?'is-invalid':''); ?>" value="1" required <?php echo e(old('is_active')=='1'?'checked':''); ?>>
                        <?php if($errors->has('is_active')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('is_active')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Employee</button>
                </form>
            </div>
        </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\example-app\resources\views/create.blade.php ENDPATH**/ ?>