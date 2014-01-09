<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbFiles extends Migration
{

    public function up()
    {
        Schema::create('files', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('disk_name');
            $table->string('file_name');
            $table->integer('file_size');
            $table->string('content_type');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('field')->nullable()->index();
            $table->string('attachment_id')->index();
            $table->string('attachment_type')->index();
            $table->boolean('public')->default(true);
            $table->integer('sort_order')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('system_files');
    }

}
