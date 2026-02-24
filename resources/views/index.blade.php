@extends('layouts.app')

@section('content')
    <table cellpadding="8">
        <thead>
                <tr>
                    <td><b> ID </b></td>
                    <td><b> Feature Name </b></td>
                    <td><b> Description </b></td>
                </tr>
        </htead>
        <tbody>
            @foreach($page as $feature)
            <tr>
                <td>{{ $feature->id }}</td> 
                <td>{{ $feature->features }}</td>
                <td>{{ $feature->description }}</td> 
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection