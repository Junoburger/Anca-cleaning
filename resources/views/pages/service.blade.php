
@extends('layouts.app')
@section('content')
<div class="jumbotron">

    <h1  class="h1-public">Services</h1>

            <div class="cleaner">
                                   <div class="clean-info">
                                  <a href="/public">
                                            <h3 id="public">Public Sector Cleaning</h3>

                                         <img   class="service-image"
                                            id="fade" src="images/other.jpg"
                                            onmouseover="this.src='/images/publicsector2.jpeg'"
                                            onmouseout="this.src='/images/publicsector.jpg'"
                                            onmousedown="this.src='/images/publicsector.jpg'">
                                 </a>

                                 <a href="/residential">

                                        <h3 id="residential">Residential Cleaning</h3>

                                        <img id="fade" class="service-image"
                                         src="images/privateclean.jpeg"
                                         onmouseover="this.src='/images/privateclean2.jpeg'"
                                         onmouseout="this.src='/images/privateclean.jpeg'">
                                    </a>



                                    <a href="/hospitality">

                                    <h3 id="hospitality">Hospitality Cleaning</h3>

                                    <img id="fade"  class="service-image"
                                        src="images/hospitality2.jpeg"
                                        onmouseover="this.src='/images/retail.jpg'"
                                        onmouseout="this.src='/images/hospitality2.jpeg'"
                                        onmousedown="this.src='/images/hospitality.jpeg'">
                                    </a>

                                    <a href="/retail"><h3 id="retail">
                                    Retail/ Commercial
                                    &amp;<br>Industrial Cleaning </h3>
                                    <img id="fade"  class="service-image"
                                    src="images/retail2.jpg"
                                    onmouseover="this.src='/images/retail3.jpeg'"
                                    onmouseout="this.src='/images/retail2.jpg'">
                                    </a>

                                    <a href="/other">
                                        <h3 id="other">
                                            Other Cleaning Services </h3>
                                    <img id="fade" src="images/eco.jpeg" class="service-image"
                                    onmouseover="this.src='/images/ladyclean2.jpeg'"
                                    onmouseout="this.src='/images/eco.jpeg'"></a>

                    </div>
        </div>

</div>




@endsection
