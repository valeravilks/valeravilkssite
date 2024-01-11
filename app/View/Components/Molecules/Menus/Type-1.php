<?php

namespace App\View\Components\Molecules\Menus;

use Illuminate\View\Component;

class Type-1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.menus.type-1');
    }
}
