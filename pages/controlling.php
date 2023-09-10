<div class="row">
    <div class="card w-75 mb-3">
        <div class="card-body">
            <h5 class="card-title text-center mb-3">Data Set Timer Penyiraman Air</h5>
            <table class="table  border-1 border-success">
                <thead class="border-1 border-success">
                    <tr class=" table-success">
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card w-25 mb-3">
        <div class="card-body mt-3 border rounded">
            <h5 class="card-title text-center mb-4">Set Timer Penyiraman</h5>
            <form action="setTimer" method="post" class="mb-3 text-center">
                <label for="time"></label>
                <input type="time" name="time" id="setSch">
            </form>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-info" type="button">Simpan</button>
            </div>
        </div>
        <div class="card-body my-3 border rounded bg-dark">
            <h5 class="card-title text-center text-white mb-4">Penyiraman Air Manual</h5>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="button">Siram</button>
            </div>
        </div>
    </div>
</div>