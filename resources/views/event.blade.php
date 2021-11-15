@extends('layouts.admin_layout')

@section('content')
    <table>
    <thead>
    <tr>
        <th>user name</th>
        <th> date event  </th>
        <th> time event  </th>
        <th> description </th>

    </tr>
    </thead>
    <tbody>
    @foreach($event as $event)
        <tr>
            <td> {{$event->user->name}} </td>
            <td> {{$event->date_event->format('j F, Y')}} </td>
            <td> {{$event->date_event->formatLocalized("%A %d %B %Y") }} </td>
            <td> {{$event->description}} </td>

        </tr>
    @endforeach
    </tbody>
</table>
@endsection
