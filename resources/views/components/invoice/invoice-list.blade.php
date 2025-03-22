<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h5>Invoices</h5>
                </div>
                <div class="align-items-center col">
                    <a    href="{{url("/salePage")}}" class="float-end btn m-0 bg-gradient-primary">Create Sale</a>
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Total</th>
                    <th>Vat</th>
                    <th>Discount</th>
                    <th>Payable</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="tableList">
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>+123456789</td>
                        <td>$100</td>
                        <td>$10</td>
                        <td>$5</td>
                        <td>$105</td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#details-modal" class="btn bg-gradient-warning" onclick="editCustomer()">view</button>
                            <button data-bs-toggle="modal" data-bs-target="#delete-modal" class="btn bg-gradient-danger" onclick="deleteCustomer()">Delete</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
