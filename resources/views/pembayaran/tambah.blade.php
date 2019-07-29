@extends('layouts/master')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Pembayaran</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="/pembayaran/tambah_proses" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label>No Invoice</label>
                {{ 
                    Form::select(
                        'purchase_order_id', 
                        array(
                            1 => 'Large', 
                            2 => 'Small',
                            3 => 'Big'
                        ), 
                        NULL, 
                        array(
                            'class' => 'form-control select2'
                        )) 
                }}
            </div>

            <div class="form-group">
                <label for="jumlah_pembayaran">Jumlah Bayar</label>
                <input name="jumlah_pembayaran" type="number" class="form-control" id="jumlah_pembayaran" placeholder="Jumlah Pembayaran" required>
            </div>

            <div class="form-group">
                <label>Tanggal Pembayaran:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                    </div>
                    <input name="tgl_pembayaran" type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
            </div>

            

            <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Bayar">
            </div>
        </form>
    </div>
</div>
@endsection