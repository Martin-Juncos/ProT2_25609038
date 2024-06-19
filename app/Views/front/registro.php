<!-- inicio registro -->
<div class="registro container">
    <form class=" row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Calle y numero">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Provincia</label>
            <select id="inputState" class="form-select">
                <option selected>Elegir...</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Codigo Postal</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-dark">Registrarse</button>
            <button type="submit" class="btn btn-secondary">Cancelar</button>
        </div>
    </form>
</div>
<!-- fin registro -->