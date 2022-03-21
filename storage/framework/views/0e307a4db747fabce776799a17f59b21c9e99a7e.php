
<?php $__env->startSection('content'); ?>

  <div class="content__header content__boxed overlapping">
      <div class="content__wrap">
          <h1 class="page-title mb-2">Usuarios</h1>
          
          <!-- END : Page title and information -->
      </div>
  </div>

  <div class="content__boxed">
      <div class="content__wrap">

          <!-- Table with toolbar -->
          <div class="card mt-5">

            <div class="card-header">
                <div class="row">

                    <!-- Left toolbar -->
                    <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-start mb-3">

                      


                    </div>
                    <!-- END : Left toolbar -->

                    <!-- Right Toolbar -->
                    <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
                        <a href="" class="btn btn-primary hstack gap-2 align-self-center btn_create_contrata">
                            <i class="demo-psi-add fs-5"></i>
                            <span class="vr"></span>
                            Añadir usuario
                        </a>
                    </div>

                    <!-- END : Right Toolbar -->

                </div>
            </div>

              <div class="card-body">
                <div id="lista_usuarios_lista">
                    <?php echo $__env->make('usuarios.lista_usuarios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

              </div>
          </div>

      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\proyecto-packages-laravel\resources\views/usuarios/list.blade.php ENDPATH**/ ?>