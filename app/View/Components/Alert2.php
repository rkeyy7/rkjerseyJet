<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{

    public $clases;


    /**
     * Create a new component instance.
     */
    public function __construct($type = "info")
    {
  
            switch ($type) {
                case 'info':
                    $clases = 'bg-blue-100 border-blue-500 text-blue-700 ';
                    break;
        
                case 'danger':
                    $clases = 'bg-red-100 border-red-500 text-red-700 ';
                    break;
        
                default:
                    $clases = 'bg-yellow-100 border-blue-500 text-blue-700 ';
                    break;
            }

            $this->clases = $clases;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
