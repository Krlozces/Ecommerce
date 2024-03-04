<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shopping_carts', function (Blueprint $table) {
            $table->id();
            $table->double('total');
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_productos');
            $table->foreign('id_productos')->references( 'id' )->on( 'products' );
            $table->unsignedBigInteger("id_usuarios");
            $table->foreign( "id_usuarios" )->references( "id")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_carts');
    }
};
