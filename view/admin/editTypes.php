<section class="container">
    <h1 class="text-center edit-header">Edit Types</h1>
    <form action="index.php" method="POST" id="form-change" class="col-sm-12 col-med-6">
        <input type="hidden" name="action" id="action" value="addType">
        <div class="vehicle-table two-col-table mx-auto">
            <table class="table table-light table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col" class="text-center">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" name="deleteValue" id="deleteValue" >
                    <!-- Loop through each type -->
                    <?php foreach ($types as $type) : ?>
                        <tr>
                            <td><?php echo $type['typeName']; ?></td>
                            <td class="text-center">
                                <i class="fas fa-minus-circle mx-auto"  id="delete-type"    onclick="deleteEntry(<?php echo $type['id']; ?>, 'deleteType')"></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="form-group form-inline two-col-table mx-auto">
            <label for="className" class="col-3 col-md-2 col-form-label">Type</label>
            <div class="col-9 col-md-6">
                <input type="text" name="className" id="className" class="form-control" required/>
            </div>
            <div class="form-group form-inline col-12 col-md-3">
                <button type="submit" class="btn btn-color ml-auto m-2">Add Type</button>
            </div>
        </div>
    <!-- If the to do list table is not empty diplay full list -->
        <?php if (count($types) == 0) {?>
            <h2 class="text-center">No Matching Vehicles</h2>
        <?php } ?>  
    </form>
</section>