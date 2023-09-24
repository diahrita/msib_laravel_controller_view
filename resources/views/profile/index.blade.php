@extends('component.app')

@section('content')
  <div class="container pt-5">
    <div class="card mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-primary">
      <div class="container">
        <br>
        <h3 class="mb-4 fs-3 text-dark card-header bg-white">
          <center><b>ABOUT ME</b></center>
        </h3>

        <div class='row g-0 position-relative'>
          <div class='col-md-6 mb-md-0 p-md-3'>
            <center><img src='{{ asset("img/me.jpg") }}' class="rounded" width="380" height="auto"></center>
          </div>
          <div class='col-md-6 p-4 ps-md-0'>
            <center>
              <table class="table table-borderless fs-5">
                <tr>
                  <td>Nama</td>
                  <td>: {{ $nama }}</td>
                </tr>
                <tr>
                  <td>Program Studi</td>
                  <td>: {{ $prodi }}</td>
                </tr>
                <tr>
                  <td>Jurusan</td>
                  <td>: {{ $jurusan }}</td>
                </tr>
                <tr>
                  <td>Asal Politeknik</td>
                  <td>: {{ $poltek }}</td>
                </tr>
                <tr>
                  <td>Mitra SIB</td>
                  <td>: {{ $mitra }}</ /td>
                </tr>
                <tr>
                  <td>Bidang</td>
                  <td>: {{ $bidang }}</ /td>
                </tr>
              </table>
            </center>
          </div>
        </div>

      </div>
    </div>
  </div>

</html>

@endsection