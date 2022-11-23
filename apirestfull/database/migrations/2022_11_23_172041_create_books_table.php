<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
    class Book extends Model
   
    { use HasFactory;
        protected $fillable = [
            'nombre',
            'cantidad de creditos',
            'intensidad horaria',
            'carrera asociada',
    
        ];
        public function getDescriptionAttribute($value)
        {
            return substr($value, 1, 120);

        }
        public function user()
        {
            return $this-->belongsTo(User::class);
        }
    }
    Schema::create('books', function (Blueprint $table) {
        $table->id('id');
        $table->text('nombre');
        $table->string('cantidad de creditos');
        $table->string('intensidad horaria');
        $table->text('carrera asociada');
        
        $table->foreing('nombre')->references('id')->on('users');
        $table->timestamps();
    });

