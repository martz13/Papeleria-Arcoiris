        <div class="container">    
            <form method="post" action="http://example.com/crearproducto.php">
                <div class="mb-3">
                    <label class="form-label">Nombre de la pieza</label>
                    <input class="form-control" type="text" name="Piezas" placeholder="Ingresa el nombre de la pieza" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input class="form-control" type="number" name="Precio" placeholder="Ingresa el precio" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripcion</label>
                    <input class="form-control" type="text" name="Descripcion" placeholder="Ingresa la descripcion" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input class="form-control" type="number" name="Stock" placeholder="Ingresa el stock" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagen</label>
                    <input class="form-control" type="text" name="Imagen" placeholder="Ingresa la ruta de la imagen" aria-label="default input example">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>    
        </div>
    </body> 
</html>