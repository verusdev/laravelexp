@extends('layouts.admin_layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="timeline">
                    <!-- timeline time label -->

                    @foreach($event as $event)
                        <div class="time-label">
                            <span class="bg-red">{{$event->date_event->format('d-m-Y')}}</span>
                        </div>
                        <div>
                            <i class="fas fa-user bg-green"></i>
                            <div class="timeline-item">
                                <span class="time"><i
                                        class="fas fa-clock"></i> {{$event->date_event->format('h:i')}}</span>
                                <h3 class="timeline-header"><a href="#">{{$event->user->name}}</a> sent you an email
                                </h3>

                                <div class="timeline-body">
                                    {{$event->description}}
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-sm">Read more</a>
                                    <a class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div><i class="fas fa-clock bg-gray" data-toggle="modal" data-target="#myModal" id="clock"></i></div>
                </div>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <div class="modal-body">
                                <form id="myForm" name="myForm" class="form-horizontal" novalidate="">

                                    <div class="form-group">
                                        <label>User</label>
                                        <input type="text" class="form-control" id="user" name="user"
                                               placeholder="Enter title" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Textarea</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter Description" id="description" name="description"></textarea>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="btn-save">Close</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

@endsection
