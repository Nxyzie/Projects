<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background: url('../images/b1.png') no-repeat center center fixed; 
            background-size: cover; 
        }
        .sidebar { width: 250px; height: 100vh; background: rgb(194, 111, 23); color: white; position: fixed; padding: 20px; }
        .sidebar a { display: block; color: white; text-decoration: none; padding: 10px; margin: 10px 0; }
        .sidebar a:hover { background: #0056b3; }
        .main-content { margin-left: 270px; padding: 20px; }
        .top-bar { background: white; padding: 15px; display: flex; justify-content: space-between; align-items: center; }
        .card { background: white; padding: 20px; margin: 20px 0; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .chart-container { display: flex; justify-content: space-between; }
        .chart { width: 48%; height: 200px; background: #e3e3e3; border-radius: 8px; display: flex; align-items: center; justify-content: center; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>POS</h2>
        <a href="#">Home</a>
        <a href="#">My Stores</a>
        <a href="#">Products</a>
        <a href="#">Reports</a>
        <a href="#">Billing</a>
        <a href="#">Settings</a>
        <a href="#">My Profile</a>
    </div>
    <div class="main-content">
        <div class="top-bar">
            <h2>Dashboard</h2>
            <div>
                <span>User: Admin</span>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="card">
            <h3>Successful Top-ups</h3>
            <p>Showing last 7 days</p>
        </div>
        <div class="chart-container">
            <div class="chart">Top 5 Products</div>
            <div class="chart">Transactions vs. Last Months</div>
        </div>
    </div>
</body>
</html>