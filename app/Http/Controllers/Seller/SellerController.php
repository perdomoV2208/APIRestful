<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('scope:read-general')->only('show');
        $this->middleware('can:view,seller')->only('show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->allowedAdminAction();

        $vendedores = Seller::has('products')->get();

        return $this->showAll($vendedores);
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller)
    {
        return $this->showOne($seller);
    }

}
