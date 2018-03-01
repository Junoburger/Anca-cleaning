@extends('layouts.app')


@section('content')

<div class="jumbotron" >

    <h1 class="h1-public">Other Cleaning Services</h1>



         <a href="/service"><img class="hotel" src="images/eco.jpeg" alt="" height="300px" width="300px"></a>



    <ul class="public-ul">

         <li class="about-list">Eco-Cleaning</li>

         <a href="/ecsp" style="text-decoration:none;color:inherit;"><li class="about-list">Extreme Cleaning Service Package</li></a>
         <a href="" style="text-decoration:none;color:inherit;"><li class="about-list">Party Cleaning Services Before & After</li></a> 




    </ul>
       <a style="margin-top:5%;" class="front-button-service" href="/contact">Get a Quote</a>


</div>



@endsection
