<x-mail::message>
    # Order Placed Sucessfully

    Thankyou for your order. we will send a confrimation email for your oredr has been shipped

    <x-mail::button :url="$url">
        View Order
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
