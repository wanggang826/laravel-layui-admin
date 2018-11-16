<?php
namespace App\Http\Controllers\Admin;
/**
 * Created by PhpStorm.
 * User: yiming
 * Date: 18-11-15
 * Time: 下午1:49
 */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //登录表单
    public function index(){
        $user = Auth::guard('admin')->user();
        if ($user) return redirect('/admin/index');
        return view('admin.login.login');
    }

    //登录验证
    public function signIn(Request $request){
        dump($request->input());
    }

    public function logOut()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}