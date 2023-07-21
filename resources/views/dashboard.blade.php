<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts/admin')

@section('konten')

    <body>
        <div class="container mt-5">
            <h1>Dashboard Admin</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Nilai Mahasiswa</th>
                        <th>Keahlian</th>
                        <th>Prestasi</th>
                        <th>Aksi</th> <!-- Kolom untuk ikon aksi -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>MK1</th>
                                        <th>MK2</th>
                                        <th>MK3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>85</td>
                                        <td>90</td>
                                        <td>78</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>K1</th>
                                        <th>K2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Programming</td>
                                        <td>Design</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>CP1</th>
                                        <th>CP2</th>
                                        <th>CP3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>First Place</td>
                                        <td>Second Place</td>
                                        <td>Third Place</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <!-- Tambahkan ikon delete, ubah, dan read di sini -->
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-success"><i class="fas fa-eye"></i> Read</a>
                        </td>
                    </tr>
                    <!-- Tambahkan baris sesuai dengan data mahasiswa lainnya -->
                </tbody>
            </table>
        </div>
    </body>
@endsection
