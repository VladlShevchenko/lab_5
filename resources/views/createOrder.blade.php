@extends('layout.app')
@section('title', 'Створення замовлення')
@section('content')
    @isset($status)
        <div class="error" role="alert">
            Замовлення було створено.<br>
            Всі замовлення:
        </div>
        <div class="error"> {{print_r($orders)}} </div>
    @endisset
    <form action="{{route('createOrder')}}" class="order" method="POST">
        @csrf
        <div class="order_block">
            <label class="order_text">Назва плану</label>
            <select class="form-select" name="title" required>
                <option selected>Виберіть назву плану</option>
                @foreach($plans as $i=>$plan)
                    <option value="{{$i}}">{{$plan->getTitle()}}</option>
                @endforeach
            </select>
        </div>
        <div class="order_block">
            <label class="order_text">Кількість користувачів</label>
            <input type="number" class="form-control" placeholder="Введіть кількість користувачів" name="amountOfUsers" required>
        </div>
        <div class="order_block">
            <label class="order_text">Ваша електронна адреса</label>
            <input type="text" class="form-control" placeholder="Введіть Ваш email" name="email" required>
        </div>
        <div class="order_block">
            <button type="submit">Підтвердити замовлення</button>
        </div>
    </form>
@endsection
