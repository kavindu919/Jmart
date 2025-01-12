<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;


class HomePage extends Component
{
    public function render()
    {
        $brands = Brand::where('is_active', 1)->get();
        $categoris = Category::where('is_active', 1)->get();
        return view('livewire.home-page', ['brands' => $brands, 'categoris' => $categoris]);
    }
}
