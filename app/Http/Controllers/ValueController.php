<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Value;

class ValueController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return Value::find(1);
    }

    /**
     * Increments the value
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $value = Value::find(1);
        $value->value += 1;
        $value->save();

        return $value;
    }
}
