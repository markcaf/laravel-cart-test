@extends('layout')
  
@section('content')
<div class="checkout_form">
    <script src="https://js.braintreegateway.com/web/dropin/1.33.4/js/dropin.js"></script>

    <div id="dropin-container"></div>
    <button id="submit-button" class="button button--small button--green">Purchase</button>
</div>
@endsection
  
@section('scripts')
<script type="text/javascript">
  
    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
    authorization: 'sandbox_g42y39zw_348pk9cgf3bgyw2b',
    selector: '#dropin-container'
    }, function (err, instance) {
    button.addEventListener('click', function () {
        instance.requestPaymentMethod(function (err, payload) {
        // Submit payload.nonce to your server
        });
    })
    });
  
</script>
@endsection