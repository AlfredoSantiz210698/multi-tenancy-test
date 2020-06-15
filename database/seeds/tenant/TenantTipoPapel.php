<?php

use Illuminate\Database\Seeder;
use App\Models\Tenant\TipoPapel as TipoPapelModel;

class TenantTipoPapel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposPapeles = [
            'Papel Couché',
            'Papel offset',
            'Papel reciclado'
        ];

        foreach ($tiposPapeles as $tipoPapel):
            TipoPapelModel::create([
                'nombre'    => $tipoPapel
            ]);
        endforeach;
    }
}
