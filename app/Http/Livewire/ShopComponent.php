<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use App\Models\Producer;
use Cart;


class ShopComponent extends Component
{
    use WithPagination;

    public $sorting;
    public $pagesize;

    public function render()
    {
        $products_1 = Product::where('category_id', 1)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        $products_2 = Product::where('category_id', 2)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        $products_3 = Product::where('category_id', 3)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        $products_4 = Product::where('category_id', 4)->orderBy('created_at', 'DESC')->paginate($this->pagesize);

        return view('livewire.shop-component',[
            'products_1' => $products_1,
            'products_2' => $products_2,
            'products_3' => $products_3,
            'products_4' => $products_4,
        ])->layout('layouts.base');
    }
}
