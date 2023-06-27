@extends('layouts.main')

@section('content')
<h1 class="mt-4">Users Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Users Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <th>Veri Ardiansyah</th>
                    <th>Veri</th>
                    <th>Ardian23/th>
                    <th>ardian78@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <th>John Terry</th>
                    <th>John</th>
                    <th>Terry78</th>
                    <th>chelsea90@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <th>Mbappe</th>
                    <th>Mpaypal</th>
                    <th>Paypal21</th>
                    <th>Mbappe98@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <th>Nurdin</th>
                    <th>Udin</th>
                    <th>Nut42</th>
                    <th>nutrisari34@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <th>Rendy</th>
                    <th>Rendy</th>
                    <th>renn231</th>
                    <th>Rendy342@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection