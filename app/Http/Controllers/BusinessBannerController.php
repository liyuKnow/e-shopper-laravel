<?php

namespace App\Http\Controllers;

use App\Models\BusinessBanner;
use Illuminate\Http\Request;

class BusinessBannerController extends Controller
{

    public function index()
    {
        return BusinessBanner::all();
    }
 
    public function show(BusinessBanner $business_banner)
    {
        return $business_banner;
    }

    public function store(Request $request)
    { 
        $business_banner = BusinessBanner::create($request->all());

        return response()->json($business_banner, 201);
    }

    public function update(Request $request, BusinessBanner $business_banner)
    {
        $business_banner->update($request->all());

        return response()->json($business_banner, 200);
    }

    public function delete(BusinessBanner $business_banner)
    {
        $business_banner->delete();

        return response()->json(null, 204);
    }
}
