<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumière Patisserie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script>
        function showDetails(title, price, description) {
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalPrice').innerText = price;
            document.getElementById('modalDescription').innerText = description;
            var myModal = new bootstrap.Modal(document.getElementById('detailModal'));
            myModal.show();
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand text-dark fw-bold" href="#">Lumière Patisserie</a>
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search cakes, pastries...">
                <button class="btn btn-outline-dark">Search</button>
            </div>
            <button class="btn btn-dark ms-3">Cart</button>
            <button class="btn btn-dark ms-2">Login/Sign Up</button>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="cakes.jpg" class="card-img-top" alt="Cake">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate Cake</h5>
                        <p class="card-text">Rp 250.000</p>
                        <button class="btn btn-dark" onclick="showDetails('Chocolate Cake', 'Rp 250.000', 'A rich and delicious chocolate cake.')">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="pastry1.jpg" class="card-img-top" alt="Pastry">
                    <div class="card-body">
                        <h5 class="card-title">Strawberry Tart</h5>
                        <p class="card-text">Rp 150.000</p>
                        <button class="btn btn-dark" onclick="showDetails('Strawberry Tart', 'Rp 150.000', 'A fresh strawberry tart with a buttery crust.')">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="pastry2.webp" class="card-img-top" alt="Pastry">
                    <div class="card-body">
                        <h5 class="card-title">Redvelvet Cake</h5>
                        <p class="card-text">Rp 225.000</p>
                        <button class="btn btn-dark" onclick="showDetails('Redvelvet Cake', 'Rp 225.000', 'A soft and moist cake with a hint of cocoa, layered with smooth cream cheese frosting, offering a perfect balance of sweetness and tanginess.')">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="pastry4.webp" class="card-img-top" alt="Pastry">
                    <div class="card-body">
                        <h5 class="card-title">Apple Cheesy Puff</h5>
                        <p class="card-text">Rp 18.000</p>
                        <button class="btn btn-dark" onclick="showDetails('Apple Cheesy Puff', 'Rp 18.000', 'A crispy puff pastry filled with caramelized apples and melted cheese, offering a perfect balance of sweet and savory flavors.')">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="modalPrice"></p>
                    <p id="modalDescription"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
