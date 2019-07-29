@extends('layouts/master')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tambah Data</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="/purchase_order/tambah_proses" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="NoPurchaseOrder">No Purchase Order</label>
                <input name="no_purchase_order" type="text" class="form-control" id="NoPurchaseOrder" placeholder="No Purchase Order" required>
            </div>

            <div class="form-group">
                <label for="nama_project">Nama Project</label>
                <input name="nama_project" type="text" class="form-control" id="nama_project" placeholder="Nama Project" required>
            </div>

            <div class="form-group">
                <label for="customer">Customer</label>
                <input name="customer" type="text" class="form-control" id="customer" placeholder="Customer" required>
            </div>

            

            <div class="form-group">
                <label for="nominal_purchase_order">Nominal Purchase Order</label>
                <input name="nominal_purchase_order" type="number" class="form-control" id="nominal_purchase_order" placeholder="Nominal Purchase Order" required>
            </div>

            <label for="status_delivery">Status Delivery</label>
            <select name="status_delivery" class="form-control">
                <option value="1" selected>Belum Selesai</option>
                <option value="2">Selesai</option>
            </select>

            <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Tambah">
            </div>
        </form>
    </div>
</div>
@endsection