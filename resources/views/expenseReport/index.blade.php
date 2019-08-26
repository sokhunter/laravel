@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports/create" class="btn btn-primary">Create new report</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table>
                @foreach ($expenseReports as $item)
                   <tr>
                       <td>
                           {{$item->title}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
