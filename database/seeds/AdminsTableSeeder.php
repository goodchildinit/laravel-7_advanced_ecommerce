<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id' => 1, 'name'=>'admin','type'=>'admin','mobile'=>'07037926856','email'=>'chiboy4real11@gmail.com',
            'password'=>'$2y$10$qoG3NA86SSlJDeaOOShqlOY9H69Gb5IPgvvyhurofaPc4l55F7tBK', 'image'=>'','status'=>1
            ],
            ['id' => 2, 'name'=>'john','type'=>'subadmin','mobile'=>'07037926856','email'=>'john@gmail.com',
            'password'=>'$2y$10$qoG3NA86SSlJDeaOOShqlOY9H69Gb5IPgvvyhurofaPc4l55F7tBK', 'image'=>'','status'=>1
            ],
            ['id' => 3, 'name'=>'victor','type'=>'subadmin','mobile'=>'07037926856','email'=>'victor@gmail.com',
            'password'=>'$2y$10$qoG3NA86SSlJDeaOOShqlOY9H69Gb5IPgvvyhurofaPc4l55F7tBK', 'image'=>'','status'=>1
            ],
            ['id' => 4, 'name'=>'goodchild','type'=>'subadmin','mobile'=>'07037926856','email'=>'goodchild@gmail.com',
            'password'=>'$2y$10$qoG3NA86SSlJDeaOOShqlOY9H69Gb5IPgvvyhurofaPc4l55F7tBK', 'image'=>'','status'=>1
            ],
        ];

        DB::table('admins')->insert($adminRecords);
        // foreach ( $adminRecords as $key => $record) {
        //    \App\Admin::create($record);
        // }
    }
}
