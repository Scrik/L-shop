<div class="c-product z-depth-1">
    <div class="c-1-info">
        <p class="c-p-name">{{ $product->name }}</p>
        @if(is_file(img_path('items/' . $product->image)) && file_exists(img_path('items/' . $product->image)))
            <img src="/img/items/{{ $product->image }}" alt="prod">
        @else
            <img src="/img/empty.png" alt="prod">
        @endif

        <button class="btn danger-color btn-sm btn-block cart-remove"
                data-url="{{ route('cart.remove', ['server' => $currentServer->id, 'product' => $product->id]) }}">
            <i class="fa fa-times fa-left"></i>
            Убрать
        </button>
    </div>
    <div class="c-2-info">
        <p class="c-p-count">Количество</p>
        <div class="md-form">
            <input type="text" class="form-control text-center c-p-count-input" value="{{ $product->stack }}">
        </div>
        <div class="c-p-cbuttons" data-stack="{{ $product->stack }}" data-price="{{ $product->price }}">
            <button class="btn btn-warning btn-sm cart-minus-btn"><i class="fa fa-minus"></i></button>
            <button class="btn btn-warning btn-sm cart-plus-btn"><i class="fa fa-plus"></i></button>
        </div>
        <p class="c-p-pay">К оплате:</p>
        <p class="c-p-pay-money"><span>{{ $product->price }}</span><i class="fa fa-dollar fa-right"></i></p>
    </div>
</div>