@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
              This is some text within a card body.
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-6">
            <div class="fixed-bottom">
                   <div class="card ml-auto h-75" style="width: 25rem;">
                      <div class="card-header">Chat Panel</div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                      <div class="card-body">
                        This is some text within a card body.
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
