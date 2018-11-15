@if ($errors->any())
<style>
    ul {
        padding-left: 10px;
    }
</style>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
    		</div>
    	</div>
    </div>
@endif