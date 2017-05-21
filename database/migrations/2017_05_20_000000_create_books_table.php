<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateBooksTable extends Migration{

        public function up()
        {
            Schema::create('books', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('author');
                $table->text('description');
                $table->tinyInteger('is_published');
                $table->tinyInteger('category');
                $table->string('add_date');
                $table->string('file_name');
                $table->string('picture_path');
                $table->tinyInteger('is_deleted');
                $table->bigInteger('downloads');

            });
        }

        public function down()
        {
            Schema::drop('books');
        }

    }