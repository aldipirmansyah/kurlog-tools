<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resi;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{

    public function upload(Request $request)
    {

        $files = $request->file('excel');

        foreach ($files as $file) {

            $data = Excel::toArray([], $file);

            foreach ($data[0] as $index => $row) {

                if ($index < 2) continue;

                if ($row[6] == 'Belum dibagging') {

                    Resi::create([
                        'agen' => $row[1],
                        'no_resi' => $row[3],
                        'status_bagging' => $row[6],
                    ]);

                }

            }

        }

        return redirect('/hasil');
    }

}
