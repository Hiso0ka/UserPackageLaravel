<?php
namespace App\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

/**
 *
 */
class InstallPacakge extends Command
{
  protected $signature = 'packageprovider:install';
  protected $description = 'Install Package Laravel'

  public function handle(){

    $this->info('Instalando paquete...');
    $this->info('Publicando configuración...');

    if (! this->configExists('packageprovider.php')) {

      $this->publishConfiguration();
      $this->info('configuración publicada');
    } else {
      if ($this->shouldOverwriteConfig()) {
        $this->info('Sobrescribiendo configuración...');
        $this->publishConfiguration($force = true);
      } else {
        $this->('Configuración no sobrescrita');
      }
    }
    $this->info('Paquete instalado');
  }

  private function configExists($fileName){
    return File::exists(config_path($fileName));
  }

  private function shouldOverwriteConfig(){
    return $this->confirm(
      'Archivo de configuración existente. Desea sobrescribirlo?',
      false
    );
  }

  private function publishConfiguration($forcePublish = false){
    $params = [
      '--provider' => "App\PackageProvider",
      '--tag' => "config"
    ];

    if ($forcePublish === true) {
      $params['--force'] = true;
    }
    $this->call('vendor:publish', $params);

  }

}
