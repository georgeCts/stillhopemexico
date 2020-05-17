<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePrivileges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA PRIVILEGIOS_CATEGORIAS
        Schema::create('privileges', function(Blueprint $table) {
            $table->increments('pk_privilege');
            $table->integer('pk_privilege_category')->unsigned();
            $table->integer('parent_pk_privilege')->unsigned()->nullable();
            $table->string('privilege', 150)->unique();
            $table->string('tag', 120);

            $table->boolean('menu');
            $table->integer('menu_order')->nullable();
            $table->string('menu_url', 200)->nullable();
            $table->boolean('active');

        });


        //FOREIGNS KEYS
        Schema::table('privileges', function($table) {
            $table->foreign('pk_privilege_category')->references('pk_privilege_category')->on('privileges_categories');
        });


        DB::statement("INSERT INTO
            privileges
        (
            pk_privilege, pk_privilege_category, parent_pk_privilege, privilege, tag, 
            menu, menu_order, menu_url, active
        )
        VALUES
            (1, 1, NULL, 'PUBLICACIONES', 'Lista de publicaciones',         1, 1, 'publicaciones', 1),
            (2, 1, NULL, 'PUBLICACIONES_CREAR', 'Crear publicación',        1, 2, 'publicaciones/publicacion-crear', 1),

            (3, 2, NULL, 'PROMOCIONES_', 'Lista de promociones',            1, 1, 'promociones', 1),
            (4, 2, NULL, 'PROMOCIONES_CREAR', 'Crear promoción',            1, 2, 'promociones/promocion-crear', 1),

            (5, 3, NULL, 'SLIDERS', 'Lista de imágenes',                    1, 1, 'sliders', 1),
            (6, 3, NULL, 'SLIDERS_CREAR', 'Crear slider',                   1, 2, 'sliders/slider-crear', 1),

            (7, 4, NULL, 'USUARIOS', 'Consultar',                           1, 1, 'usuarios', 1),
            (8, 4, NULL, 'USUARIOS_BITACORA', 'Bitácora',                   1, 2, 'usuarios/bitacora', 1),
            (9, 4, NULL, 'USUARIOS_ROLES', 'Roles y Facultades',            1, 3, 'usuarios/roles', 1),
            
            (10, 5, NULL, 'VIDEOS', 'Lista de vídeos',                      1, 1, 'videos', 1),
            (11, 5, NULL, 'VIDEOS_CREAR', 'Agregar vídeo',                  1, 2, 'videos/video-crear', 1);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('privileges', function($table) {
            $table->dropForeign(['pk_privilege_category']);
        });
        
        Schema::dropIfExists('privileges');
    }
}
