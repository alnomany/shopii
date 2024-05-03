<div @class(['tp-product-item-2 mb-40', $class ?? null])>
    <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
        <a href="{{ $product->url }}">
            {{ RvMedia::image($product->image, $product->name, $style === 2 ? 'thumb' : 'medium', true) }}
        </a>

        @include(Theme::getThemeNamespace('views.ecommerce.includes.product.badges'))

        @include(Theme::getThemeNamespace('views.ecommerce.includes.product.style-2.actions'))
    </div>
    <div class="tp-product-content-2 pt-15">
        @if (is_plugin_active('marketplace') && $product->store->getKey())
            <div class="tp-product-tag-2">
                <a href="{{ $product->store->url }}">{{ $product->store->name }}</a>
            </div>
        @endif

        <h3 class="tp-product-title-2 text-truncate">
            <a href="{{ $product->url }}" title="{!! $name = BaseHelper::clean($product->name) !!}">{!! $name !!}</a>
        </h3>

        @include(Theme::getThemeNamespace('views.ecommerce.includes.product.style-2.rating'))

        @include(Theme::getThemeNamespace('views.ecommerce.includes.product.style-2.price'))
    </div>
</div>
