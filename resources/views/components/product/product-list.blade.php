<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4>Product</h4>
                </div>
                <div class="align-items-center col">
                    <button data-bs-toggle="modal" data-bs-target="#create-modal" class="float-end btn m-0  bg-gradient-primary">Create</button>
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>Name</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="tableList">
                
                    <tr>
                        <td>XYZ AP</td>
                        <td>320</td>
                        <td>2</td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#update-modal" class="btn bg-gradient-warning" onclick="editProduct()">Edit</button>
                            <button data-bs-toggle="modal" data-bs-target="#delete-modal" class="btn bg-gradient-danger" onclick="deleteProduct()">Delete</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
