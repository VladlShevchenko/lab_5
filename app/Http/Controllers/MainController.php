<?php

namespace App\Http\Controllers;
use \App\Models\Plan;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private $orders = [];

    public function index()
    {
        $plans = $this->createPlans();
        return view('index', ['plans'=>$plans]);
    }
    public function plans($id)
    {
        $plans = $this->createPlans();
        if($id <= count($plans)) {
            return view('plans', ['plan' => $plans[$id]]);
        }
        else
            return view('plans', ['plan' => ""]);
    }
    public function faq()
    {
        return view('faq');
    }
    public function createOrder()
    {
        $plans = $this->createPlans();
        return view('createOrder', ['plans'=>$plans]);
    }
    public function createOrderPost(Request $request)
    {
        array_push($this->orders, [
            "id" => count($this->orders) + 1,
            "title" => $request->title,
            "amountOfUsers" => $request->amountOfUsers,
            "email" => $request->email
        ]);
        return response()->view('createOrder', [
            "plans" => $this->createPlans(),
            "orders" => $this->orders,
            "status" => true
        ], 200);
    }

    private function createPlans(): array
    {
        $longPlan = new Plan(1,"Довга перспектива",
            "Базовий інтернет-захист", "Включає основні можливості антивірусу. Може захистити Ваш пристрій від різного небезпечного ПЗ, але не включає інтернет-захист.",
            100);
        $popularPlan = new Plan(2,"Найбільш популярний",
            "Комплексний інтернет-захист", "Включає в себе всі можливості антивірусу. Захистить девайс на кожному кроці Вашої активності.",
            200);
        $usersPlan = new Plan(3,"Для 2+ користувачів",
            "Преміум інтернет-захист", "Включає всі можливості антивірусу. Можна активувати на 5 девайсах одночасно",
            300);
        return [1 => $longPlan, 2 => $popularPlan, 3 => $usersPlan];
    }
}
