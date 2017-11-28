@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
           <div class="card mt-4">
            <div class="card-header">Notifications Panel</div>
            <div class="card-body">
              <h4 class="card-title">List of recent notification</h4>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                  Cras justo odio
                </a>
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
