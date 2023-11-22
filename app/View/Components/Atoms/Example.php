<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

/**
 * Example Atom Component
 */

class Example extends Component
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
        return view('components.atoms.example');
    }
}
