<?php
namespace Usama\Category\Frontend;
use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 7/4/17
 * Time: 8:33 AM
 */
class CategoryController extends Controller
{
    public function index() {
        return view('category::backend.index');
    }
}