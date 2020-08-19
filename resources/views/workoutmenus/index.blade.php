@extends('layouts.app')

@section('content')

    <h1>Today's Workout menu</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Parts</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todaysmenu as $workoutmenu)
                <tr>
                    <td>{{ $workoutmenu->lapseddays }}</td>
                    <td>{{ $workoutmenu->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection