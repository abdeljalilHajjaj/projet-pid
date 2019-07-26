@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-2">
			
		</div>
		<div class="col-8">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>Titre</th>
						<th>Prix</th>
						<th>Nombre de place</th>
					</tr>
				</thead>
				<tbody>
					@foreach($shows as $show)
						<tr>
							<td> {{$show ->title}} </td>
							<td> {{$show ->price}} </td>
							<td><input style="width: 60px;float: right;" type="number" name="qt" value="0" min="0"></td>
						</tr>
					@endforeach
						<tr>
							<td>
								<form action="/your-server-side-code" method="POST">
									<script
											src="https://checkout.stripe.com/checkout.js" class="stripe-button"
											data-key="pk_test_pIaGoPD69OsOWmh1FIE8Hl4J"
											data-amount="1999"
											data-name="Stripe Demo"
											data-description="Online course about integrating Stripe"
											data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
											data-locale="auto"
											data-currency=eur>
									</script>
								</form>
							</td>
						</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
	
@endsection

<!-- Payement button -->
<!--
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>
</head>
-->
<body>
<form action="/your-server-side-code" method="POST">
	<script
			src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			data-key="pk_test_pIaGoPD69OsOWmh1FIE8Hl4J"
			data-amount="1999"
			data-name="Stripe Demo"
			data-description="Online course about integrating Stripe"
			data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
			data-locale="auto"
			data-currency="eur">
	</script>
</form>
</body>
<!--
</html>
-->
