@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update User</h4>
            </div>
            <form action="">

                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>

                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </section>
@endsection
