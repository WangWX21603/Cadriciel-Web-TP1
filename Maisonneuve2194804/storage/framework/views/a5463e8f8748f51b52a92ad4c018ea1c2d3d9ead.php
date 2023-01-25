
<?php $__env->startSection('title', 'Creer'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <!-- <div class="row">
        <div class="col-12">
            <h1 class="display-one mt-5 text-uppercase text-center"></h1>
        </div>
    </div>
    <hr> -->
    <div class="row justify-content-center my-3">

        <div class="col-8">
            <div class ="nav justify-content-end mb-3">
                <a href="<?php echo e(route('etudiant.index')); ?>" class="btn btn-outline-primary btn-md mt-5">Retourner</a>
            </div>
            <div class="card border-dark">
                <form method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card-header text-uppercase text-center bg-secondary text-white py-3">
                        <h4>Ajouter un étudiant</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group col-12">
                            <label for="nom" class="fw-semibold">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control text-secondary">
                        </div>
                        <div class="form-group col-12 mt-2">
                            <label for="adresse" class="fw-semibold">Adresse</label>
                            <input type="text" name="adresse" id="adresse" class="form-control text-secondary">
                        </div>
                        <div class="form-group col-12 mt-2">
                            <label for="phone" class="fw-semibold">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control text-secondary">
                        </div>
                        <div class="form-group col-12 mt-2">
                            <label for="email" class="fw-semibold">Email</label>
                            <input type="text" name="email" id="email" class="form-control text-secondary">
                        </div>                        
                        <div class="form-group col-12 mt-2">
                            <label for="dateNaissance" class="fw-semibold">Date de Naissance</label>
                            <input type="text" name="dateNaissance" id="dateNaissance" class="form-control text-secondary">
                        </div>                        
                        <div class="form-group col-12 mt-2">
                            <label for="ville" class="mr-sm-2 fw-semibold">Ville</label>
                            <p>
                                <!-- <select name="villeId" id="ville"> -->
                                <select class="form-select text-secondary" name="villeId" id="ville">
                                    <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ville->id); ?>"  class="form-control" ><?php echo e($ville->nom); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </p>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <input type="submit" value="Sauvegarder" class="btn btn-primary">
                    </div>
                </form>


            </div>

        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\College_Maisonneuve\session_4_cadriciel\TP1\Maisonneuve2194804\resources\views/etudiant/create.blade.php ENDPATH**/ ?>