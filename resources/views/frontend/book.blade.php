@extends('templates.frontend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>Halaman Booking&nbsp;&nbsp;&nbsp;<small>Isi Data Pribadi Anda</small></h3>
            <hr>
            <form method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> <!-- Date input -->
                            <label>Check-In</label>
                            <input class="form-control" id="chkin" name="checkin" placeholder="MM/DD/YYY" type="text" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> <!-- Date input -->
                            <label>Check-Out</label>
                            <input class="form-control" id="chkout" name="checkout" placeholder="MM/DD/YYY" type="text" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap Anda" required>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="telp" class="form-control" placeholder="Nomor Telepon Anda" required>
                </div>
                <div class="form-group">
                    <label>Alamat Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Alamat Email Anda">
                </div>
                <hr>
                <div class="pull-right">
                    <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Kamar Pilihan Anda</h3>
            <hr>
            asdas
        </div>
    </div>
</div>

@endsection

@section('custom_styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
     $( function() {
        $( "#chkin" ).datepicker();
        $( "#chkout" ).datepicker();
    } );
</script>
@endsection