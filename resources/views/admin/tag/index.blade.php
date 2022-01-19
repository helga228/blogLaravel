@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Теги</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1 mb-3">
                    <a href="{{ route('admin.tag.create') }}" class="btn btn-block btn-info">Добавить</a>
                </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th colspan="3"><i class="fas fa-caret-down"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tags as $tag)
                                            <tr>
                                                <td>{{ $tag->id }}</td>
                                                <td>{{ $tag->title }}</td>
                                                <td><a href="{{ route('admin.tag.show', $tag->id) }}"><i class="fas fa-eye"></i></a></td>
                                                <td><a href="{{ route('admin.tag.edit', $tag->id) }}"><i class="fas fa-pen"></i></a></td>
                                                <td>
                                                    <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">
                                                            <i class="fas fa-trash" role="button" class="border-0 bg-transparent"></i>
                                                        </button>

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
