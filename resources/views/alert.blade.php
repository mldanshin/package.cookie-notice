@if (!(isset($_COOKIE["cookie_confirmed"]) && $_COOKIE["cookie_confirmed"] == "1"))
    <div id="cookie-notice-container" class="cookie-notice-container">
        <div class="cookie-notice-content">
            <div>
                {{ __('danshin/cookie-notice::alert.body') }}
            </div>
            <form id="cookie-notice-form" action="{{ route("danshin.confirmation-cookie") }}" method="POST">
                <input type="hidden" name="confirmation_cookie" value="1" />
                @csrf
                <input
                    class="cookie-notice-button"
                    type="submit"
                    value="{{ __('danshin/cookie-notice::alert.button.label') }}"
                    tabindex="0"
                    title="{{ __('danshin/cookie-notice::alert.button.tooltip') }}"
                    />
            </form>
        </div>
    </div>
@endif