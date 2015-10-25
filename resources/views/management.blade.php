@extends('orchestra/foundation::layouts.page')

@section('navbar')
    @include('blupl/management::widgets.header')
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Designation/Role/Activity</th>
                <th>Number of Entries</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>Chief Executive Officer</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Executive</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Head of Anti-Corruption</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Head of Security</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Manager</td>
            <td></td>
            <td></td>

        </tr>
        </tbody>
    </table>
@stop