<?php

namespace Database\Seeders;

use App\SmSubject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sm_subjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // SmSubject::query()->truncate();

        DB::table('sm_subjects')->insert([

            [
                'school_id'=> 1,
                'subject_name'=> 'Bangla',
                'subject_code'=> 'BAN-01',
                'subject_type'=> 'T',
                'active_status'=> 1,
                'created_at' => date('Y-m-d h:i:s')
            ],
            [
                'school_id'=> 1,
                'subject_name'=> 'English For Today',
                'subject_code'=> 'ENG-01',
                'subject_type'=> 'T',
                'active_status'=> 1,
                'created_at' => date('Y-m-d h:i:s')
            ],
            [
                'school_id'=> 1,
                'subject_name'=> 'Mathematics',
                'subject_code'=> 'MATH-01',
                'subject_type'=> 'T',
                'active_status'=> 1,
                'created_at' => date('Y-m-d h:i:s')
            ],
            [
                'school_id'=> 1,
                'subject_name'=> 'Agricultural Education',
                'subject_code'=> 'AG-01',
                'subject_type'=> 'T',
                'active_status'=> 1,
                'created_at' => date('Y-m-d h:i:s')
            ],
            [
                'school_id'=> 1,
                'subject_name'=> 'Information and Communication Technology',
                'subject_code'=> 'ICT-01',
                'subject_type'=> 'T',
                'active_status'=> 1,
                'created_at' => date('Y-m-d h:i:s')
            ],
            [
                'school_id'=> 1,
                'subject_name'=> 'Science',
                'subject_code'=> 'SI-01',
                'subject_type'=> 'T',
                'active_status'=> 1,
                'created_at' => date('Y-m-d h:i:s')
            ],
            [
                'school_id'=> 1,
                'subject_name'=> 'Islam & Ethical Education',
                'subject_code'=> 'IEE-01',
                'subject_type'=> 'T',
                'active_status'=> 1,
                'created_at' => date('Y-m-d h:i:s')
            ],
   
   
        ]);
   
   
    }
}
