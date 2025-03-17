<x-layouts.app>
    <div>
        <h1>Order Details</h1>
        <p>Product: {{ $order->product_name }}</p>
        <p>Ordered By: {{ $order->user->name ?? 'Unknown' }}</p>
    </div>
</x-layouts.app>

