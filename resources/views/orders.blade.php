<x-layouts.app>
    <div>

        <div>
            Your Orders
        </div>
        <br/>

        <ul>
            @foreach ($orders as $order)
                <li>{{ $order->product_name }}- Ordered by {{ $order->user->name }}</li>
            @endforeach
        </ul>

    </div>
</x-layouts.app>

