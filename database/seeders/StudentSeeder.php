<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i = 0; $i < 10; $i++ ){
            $nim = '1801' . str_pad($i + 1, 5, '0', STR_PAD_LEFT);
            $nama = ['Gilang', 'fulan', 'Narudi', 'Sasuki', 'Kakasu'];
            $nama_acak = $nama[array_rand($nama)];
            $email = "$nama_acak.$nim@student.polibatam.ac.id";

            Student::create([
                'nim' => $nim,
                'nama' => $nama_acak,
                'email' => $email,
                'prodi' => "D4 Teknologi Perangkat Lunak",
            ]);
        }
    }
}
