@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cari Buku</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Judul Buku</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="Judul Buku" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Nama Pengarang</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nama Penerbit</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Kata Kunci Bebas</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Cari Buku   
                                </button>
                            </div>
                        </div>
                    </form>

                    <br/>
 
	<table border="1">
		<tr>
			<th width="300" >Judul Buku</th>
			<th width="150">Pengarang</th>
			<th width="150">Penerbit</th>
			<th width="150">Sisa Stok</th>
            <th width="150">Harga</th>
		</tr>
		<tr>
			<td>Homo Sapiens : Sejarah Hidup Manusia</td>
			<td>Gramedia</td>
			<td>Gramedia</td>
			<td>100</td>
            <td>IDR. 25.000</td>
		</tr>
		<tr>
			<td>Intelligence Actor for Business</td>
			<td>Gramedia</td>
			<td>Gramedia</td>
			<td>100</td>
            <td>IDR. 25.000</td>
		</tr>
        <tr>
			<td>Formasi Menyerang 4-3-3 Ala Barcelona</td>
			<td>Gramedia</td>
			<td>Gramedia</td>
			<td>100</td>
            <td>IDR. 25.000</td>
		</tr>
        <tr>
			<td>Treble Manchester United</td>
			<td>Gramedia</td>
			<td>Gramedia</td>
			<td>100</td>
            <td>IDR. 25.000</td>
		</tr>
	</table>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
