<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trains=[
            [
                'Azienda' => 'Trenord',
                'SP' => 'Bologna',
                'SA' => 'Roma',
                'OP' => '2022-09-09 15:05:20',
                'OA' => '2022-09-09 18:10:30',
                'COD_Train' => '14526',
                'N_Carrozze' => 5,
                'Ritardo' => 0,
                'Cancellato' => 0,
            ],
            [
                'Azienda' => 'Trenitalia',
                'SP' => 'Roma',
                'SA' => 'Milano',
                'OP' => '2022-09-02 15:05:20',
                'OA' => '2022-09-02 19:10:30',
                'COD_Train' => '17556',
                'N_Carrozze' => 7,
                'Ritardo' => 1,
                'Cancellato' => 0,
            ],
            [
                'Azienda' => 'Italo',
                'SP' => 'Napoli',
                'SA' => 'Reggio-Calabria',
                'OP' => '2022-09-04 15:05:20',
                'OA' => '2022-09-04 20:10:30',
                'COD_Train' => '78954',
                'N_Carrozze' => 9,
                'Ritardo' => 0,
                'Cancellato' => 1,
            ],
        ];
        
        foreach($trains as $train1){
            $train = new Train();
            $train->Azienda = $train1['Azienda'];
            $train->SP = $train1['SP'];
            $train->SA = $train1['SA'];
            $train->OP = $train1['OP'];
            $train->OA = $train1['OA'];
            $train->COD_Train = $train1['COD_Train'];
            $train->N_Carrozze = $train1['N_Carrozze'];
            $train->Ritardo= $train1['Ritardo'];
            $train->Cancellato = $train1['Cancellato'];
            $train->save();
        }
    }
}
