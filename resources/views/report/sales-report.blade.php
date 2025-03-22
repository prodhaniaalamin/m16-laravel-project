@extends('layouts.sidenav-layout')

@section('content')

<style>
    .customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        font-size: 12px !important;
    }

    .customers td, .customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .customers tr:hover {
        background-color: #ddd;
    }

    .customers th {
        padding: 12px 6px;
        text-align: left;
        background-color: #FF0080;
        color: white;
    }
</style>

<div class="container">
    <h3>Summary</h3>
    <table class="customers">
        <thead>
            <tr>
                <th>Report</th>
                <th>Date</th>
                <th>Total</th>
                <th>Discount</th>
                <th>Vat</th>
                <th>Payable</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sales Report</td>
                <td>{{ now()->format('Y-m-d') }}</td>
                <td>$500</td>
                <td>$50</td>
                <td>$25</td>
                <td>$475</td>
            </tr>
        </tbody>
    </table>

    <h3>Details</h3>
    <table class="customers">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Total</th>
                <th>Discount</th>
                <th>Vat</th>
                <th>Payable</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>+123456789</td>
                <td>johndoe@example.com</td>
                <td>$200</td>
                <td>$20</td>
                <td>$10</td>
                <td>$190</td>
                <td>{{ now()->format('Y-m-d') }}</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>+987654321</td>
                <td>janesmith@example.com</td>
                <td>$300</td>
                <td>$30</td>
                <td>$15</td>
                <td>$285</td>
                <td>{{ now()->format('Y-m-d') }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
