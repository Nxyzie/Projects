

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        header { background-color: rgb(32, 99, 43); font-family: Arial, Helvetica, sans-serif; padding: 20px; display: flex; align-items: left; justify-content: flex-start; }
        header img { height: 40px; margin-right: 10px; }
        header h1 { color: rgb(253, 253, 253); margin: 0; }
        body { background-image: url('./b1.png'); background-size: cover; background-position: center; background-attachment: fixed; font-family: Arial, sans-serif; color: #333; margin: 0; padding: 0; }
        .searchInputContainer input { width: 100%; height: 54px; font-size: 14px; padding-left: 26px; border: 1px solid #b4b0b0; border-radius: 4px; }
        .productResultContainer { padding: 10px; border: 1px solid #e2e2e2; margin-bottom: 15px; transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer; }
        .productResultContainer img { width: 100%; height: 250px; object-fit: cover; border-radius: 4px; transition: transform 0.3s ease; }
        .productResultContainer:hover img, .productResultContainer:hover { transform: scale(1.05); box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); }
        .productDetails { display: flex; justify-content: space-between; margin-top: 10px; }
        .productName { font-weight: bold; }
        .productPrice { color: #28a745; font-weight: bold; }
        .card-img-top { width: 100%; height: 250px; object-fit: cover; border-radius: 4px; transition: transform 0.3s ease; }
        .card-img-top:hover { transform: scale(1.20); }
        .posOrderContainer { padding: 0px !important; border-left: 4px solid rgb(32, 99, 43); }
        .pos_header { background: rgb(32, 99, 43); text-align: center; }
        .pos_header .logo { font-size: 57px; font-weight: bold; color: #fff; margin: 0px !important; }
        .pos_header .timeAndDate { font-size: 15px; color: #fff; }
        .alignRight { text-align: right !important; }
        .setting { font-size: 38px; margin-right: 13px; color: #fff; }
        .setting a { font-size: 38px; margin-right: 13px; color: #fff; }
        #pos_items_tbl th { color: green; font-size: 16px; }
        #pos_items_tbl td { font-size: 18px; color: #575052; }
        #pos_items_tbl tbody tr:nth-child(odd) { background: #ffe3ea; }
        .pos_item_btn { color: #ff5c85 }
        p.item_total { font-size:28px; padding-left: 10px; padding-right:14px; }
        span.item_total--value, span.item_total--label { float: right; font-weight: bold; color: rgb(0, 0, 0); font-size: 34px; height: 40%; }
        .checkout-container { display: flex; flex-direction: column; justify-content: center; align-items: center; height: 60%; }
    </style>


</head>
<body>
<header>
    <img src="../images/l1.png" alt="Logo">
    <h1>WELCOME TO BGMV Grocery Store!</h1>
    <div class="setting"><a href="javascript:(0);"><i class="fa fa-user-circle"></i></a></div>
</header>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="searchInputContainer mb-3"><input type="text" placeholder="Search Product" class="form-control"></div>
            <div class="searchResultContainer">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card" data-stock="10">
                            <img src="../images/apple.jpg" class="card-img-top" alt="Apple">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="productName fw-bold">Apple</span>
                                <span class="productPrice text-success fw-bold">₱ 25.00</span>
                                <span class="stock text-danger">Stock: 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" data-stock="10">
                            <img src="../images/chicken.avif" class="card-img-top" alt="Apple">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="productName fw-bold">Chicken</span>
                                <span class="productPrice text-success fw-bold">₱ 78.00</span>
                                <span class="stock text-danger">Stock: 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" data-stock="10">
                            <img src="../images/ground_beef.jpg" class="card-img-top" alt="Apple">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="productName fw-bold">Ground Beef </span>
                                <span class="productPrice text-success fw-bold">₱ 25.00</span>
                                <span class="stock text-danger">Stock: 10</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card" data-stock="10">
                            <img src="../images/Tomatoes.jpg" class="card-img-top" alt="Apple">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="productName fw-bold">Tomato</span>
                                <span class="productPrice text-success fw-bold">₱ 25.00</span>
                                <span class="stock text-danger">Stock: 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" data-stock="10">
                            <img src="../images/Bread.jpg" class="card-img-top" alt="Apple">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="productName fw-bold">Bread</span>
                                <span class="productPrice text-success fw-bold">₱ 45.00</span>
                                <span class="stock text-danger">Stock: 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" data-stock="10">
                            <img src="../images/pork.jpg" class="card-img-top" alt="Apple">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="productName fw-bold">Pork </span>
                                <span class="productPrice text-success fw-bold">₱ 25.00</span>
                                <span class="stock text-danger">Stock: 10</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card" data-stock="10">
                            <img src="../images/Bleach.jpg" class="card-img-top" alt="Apple">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="productName fw-bold">Bleach</span>
                                <span class="productPrice text-success fw-bold">₱ 15.00</span>
                                <span class="stock text-danger">Stock: 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" data-stock="10">
                            <img src="../images/milk.jpg" class="card-img-top" alt="Apple">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="productName fw-bold">Milk</span>
                                <span class="productPrice text-success fw-bold">₱ 98.00</span>
                                <span class="stock text-danger">Stock: 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" data-stock="10">
                            <img src="../images/soda.avif" class="card-img-top" alt="Apple">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="productName fw-bold">Soda </span>
                                <span class="productPrice text-success fw-bold">₱ 25.00</span>
                                <span class="stock text-danger">Stock: 10</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 posOrderContainer">
            <div class="pos_header">
                <p class="logo">Cashier</p>
                <p class="timeAndDate"></p>
            </div>
            <script>
                function updateTimeAndDate() {
                    const now = new Date();
                    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                    document.querySelector('.timeAndDate').textContent = `${now.toLocaleDateString(undefined, options)} ${now.toLocaleTimeString()}`;
                }
                setInterval(updateTimeAndDate, 1000);
                updateTimeAndDate();
            </script>
            <div class="pos_items_containers">
                <table class="table" id="pos_items_tbl">
                    <thead>
                        <tr><th>#</th><th>PRODUCT</th><th>PRICE</th><th>QTY</th><th>AMOUNT</th><th>       </th></tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="item_total_container">
                <p class="item_total"><span class="item_total--label">TOTAL</span><span class="item_total--value">₱ 0.00</span></p>
            </div>
            <div class="checkout-container"><a href="javascript:void(0)" class="btn btn-success btn-lg">CHECKOUT</a></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const productCards = document.querySelectorAll('.card');
    const tableBody = document.querySelector('#pos_items_tbl tbody');
    let itemCount = 1;

    productCards.forEach(card => {
        card.addEventListener('click', () => {
            const productName = card.querySelector('.productName').textContent;
            const productPrice = parseFloat(card.querySelector('.productPrice').textContent.replace('₱', '').trim());
            let stock = parseInt(card.getAttribute('data-stock'));
            const stockDisplay = card.querySelector('.stock');

            if (stock === 0) {
                alert('Sorry, this product is out of stock!');
                return;
            }

            const quantity = prompt('Enter quantity for ' + productName + ':', '1');

            if (quantity !== null && !isNaN(quantity) && quantity > 0 && quantity <= stock) {
                const amount = productPrice * quantity;
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${itemCount++}</td>
                    <td>${productName}</td>
                    <td>₱ ${productPrice.toFixed(2)}</td>
                    <td>${quantity}</td>
                    <td>₱ ${amount.toFixed(2)}</td>
                    <td>
                        <a href="javascript:void(0)" class="edit-btn"><i class="fa fa-edit"></i></a>
                        <a href="javascript:void(0)" class="delete-btn"><i class="fa fa-trash"></i></a>
                    </td>
                `;
                tableBody.appendChild(newRow);
                updateTotal();

                stock -= quantity;
                stockDisplay.textContent = `Stock: ${stock}`;
                card.setAttribute('data-stock', stock);

                if (stock === 0) {
                    stockDisplay.classList.add('text-danger');
                    stockDisplay.textContent = 'Out of stock!';
                }

                newRow.querySelector('.delete-btn').addEventListener('click', () => {
                    const qtyToRemove = parseInt(newRow.cells[3].textContent);
                    stock += qtyToRemove;
                    stockDisplay.textContent = `Stock: ${stock}`;
                    card.setAttribute('data-stock', stock);
                    newRow.remove();
                    updateTotal();
                });

                newRow.querySelector('.edit-btn').addEventListener('click', () => {
                    const newQty = prompt('Enter new quantity:', quantity);
                    if (newQty !== null && !isNaN(newQty) && newQty > 0 && newQty <= stock) {  // Stock check when editing
                        const previousQty = parseInt(newRow.cells[3].textContent);
                        newRow.cells[3].textContent = newQty;
                        newRow.cells[4].textContent = `₱ ${(productPrice * newQty).toFixed(2)}`;
                        updateTotal();

                        stock += previousQty;
                        stock -= newQty;
                        stockDisplay.textContent = `Stock: ${stock}`;
                        card.setAttribute('data-stock', stock);

                        if (stock === 0) {
                            stockDisplay.classList.add('text-danger');
                            stockDisplay.textContent = 'Out of stock!';
                        }
                    } else {
                        alert('Invalid quantity or insufficient stock!');
                    }
                });
            } else {
                alert('Invalid quantity or insufficient stock!');
            }
        });
    });

    function updateTotal() {
        let total = 0;
        tableBody.querySelectorAll('tr').forEach(row => {
            total += parseFloat(row.cells[4].textContent.replace('₱', '').trim());
        });
        document.querySelector('.item_total--value').textContent = `₱ ${total.toFixed(2)}`;
    }
});
</script>

</body>
</html>
