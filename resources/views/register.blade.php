<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Hotel System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #fff8e1, #ffcc80);
            color: #6b4f2b;
        }

        .card {
            background: #fff8e1;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(255, 204, 128, 0.5);
            border: none;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ffcc80;
            border-radius: 15px;
            color: #6b4f2b;
            box-shadow: inset 0 2px 4px rgba(255, 204, 128, 0.5);
        }

        .form-control:focus {
            border: 1px solid #f9a825;
            box-shadow: 0 0 8px #f9a825;
        }

        .btn-success {
            background: linear-gradient(to right, #f9a825, #ffcc80);
            color: #fff;
            border: none;
            border-radius: 15px;
            transition: all 0.4s ease;
            box-shadow: 0 4px 10px rgba(249, 168, 37, 0.5);
        }

        .btn-success:hover {
            background: linear-gradient(to right, #ffcc80, #f9a825);
            box-shadow: 0 8px 20px rgba(249, 168, 37, 0.8);
            transform: translateY(-2px);
        }

        .btn-back {
            background: rgba(255, 255, 255, 0.1);
            color: #f9a825;
            border: 1px solid #f9a825;
            border-radius: 15px;
            transition: all 0.4s ease;
        }

        .btn-back:hover {
            background: #f9a825;
            color: #fff;
            box-shadow: 0 4px 10px rgba(249, 168, 37, 0.8);
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form class="card p-5" style="width: 100%; max-width: 400px;" action="admin_dashboard.html">
            <h2 class="text-center mb-4">Register</h2>
            <p class="text-center text-muted mb-4">Create your account to get started!</p>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-0">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" id="name" class="form-control" placeholder="Enter your full name" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-0">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-0">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" id="password" class="form-control" placeholder="Create a password" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success w-100">Register</button>
            <a href="/" class="btn btn-back mt-3 w-100">Back</a>
            <div class="text-center mt-3">
                <a href="/login">Already have an account? Login</a>
            </div>
        </form>
    </div>
</body>

</html>
