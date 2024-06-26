<section class="tp-product-area position-relative pt-30 pb-30">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-5 col-lg-6 col-md-5">
                @if ($title = $shortcode->title)
                    <div class="tp-section-title-wrapper mb-40">
                        <h3 class="tp-section-title">
                            {!! BaseHelper::clean($title) !!}
                            {!! Theme::partial('section-title-shape') !!}
                        </h3>
                    </div>
                @endif
            </div>
            <div class="col-xl-7 col-lg-6 col-md-7">
                <div class="tp-product-tab tp-product-tab-border mb-45 tp-tab d-flex justify-content-md-end">
                    <ul
                        class="nav nav-tabs justify-content-sm-end"
                        id="productTab"
                        role="tablist"
                        data-ajax-url="{{ route('public.ajax.products', ['limit' => $shortcode->limit ?: 8]) }}"
                    >
                        @foreach($productTabs as $key => $tab)
                            @continue(! in_array($key, $selectedTabs) || (! EcommerceHelper::isReviewEnabled() && $key === 'top-rated'))

                            <li class="nav-item" role="presentation">
                                <button
                                    @class(['nav-link', 'active' => $loop->first])
                                    id="{{ $key }}-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#{{ $key }}-tab-pane"
                                    type="button"
                                    role="tab"
                                    aria-controls="{{ $key }}-tab-pane"
                                    @if ($loop->first) aria-selected="true" @endif
                                    data-bb-toggle="product-tab"
                                    data-bb-value="{{ $key }}"
                                >
                                    {{ $tab }}
                                    <span class="tp-product-tab-line">
                                        <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round" />
                                        </svg>
                                    </span>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-product-tab-content">
                    <div class="tab-content" id="productTabContent">
                        <div class="tab-pane fade show active" id="tab-pane" role="tabpanel" aria-labelledby="tab" tabindex="0"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
