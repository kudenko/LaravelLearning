<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class BooksSeeder extends Seeder{

        public function run(){
            DB::table('books')->insert([

                'title' => 'тестовая книга 1',
                'author' => 'King',
                'description' => 'test description 1',
                'is_published' => 1,
                'file_name' => 'king_Last_watch',
                'category' => 1,
                'add_date'=> '2017-04-21 23:57:05',
                'picture_path' => 'кинг.jpg',
                'is_deleted' => 0,
                'downloads' => 0,



                ]);

        }

    }