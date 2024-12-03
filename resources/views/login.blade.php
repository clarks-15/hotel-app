<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hotel System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #1c1c2b, #2a2a3d);
            color: #f8f9fa;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #ffffff;
            border-radius: 15px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .form-control::placeholder {
            color: #dcdcdc;
        }

        .form-control:focus {
            border: 1px solid #6a11cb;
            box-shadow: 0 0 8px #6a11cb;
        }

        .btn-primary {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            border: none;
            border-radius: 15px;
            transition: all 0.4s ease;
            box-shadow: 0 4px 10px rgba(42, 42, 73, 0.5);
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb);
            box-shadow: 0 8px 20px rgba(42, 42, 73, 0.8);
            transform: translateY(-2px);
        }

        .btn-back {
            background: #f8f9fa;  /* Warna latar belakang terang untuk kontras */
            color: #0072ff;  /* Warna teks biru agar jelas terbaca */
            border: 2px solid #0072ff;  /* Border biru yang lebih tegas */
            border-radius: 15px;
            transition: all 0.4s ease;
        }

        .btn-back:hover {
            background: #0072ff;  /* Ganti latar belakang menjadi biru saat di-hover */
            color: #ffffff;  /* Teks menjadi putih saat di-hover */
            box-shadow: 0 4px 10px rgba(0, 114, 255, 0.8);  /* Efek bayangan biru */
        }

        h2,
        label {
            color: #ffffff;
        }

        .text-muted {
            color: #eaeaea !important;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form class="card p-5" style="width: 100%; max-width: 400px;" action="admin_dashboard.html">
            <h2 class="text-center mb-4">Login</h2>
            <p class="text-center mb-4" style="color: #eaeaea;">Sign in to your account</p>
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
                    <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <a href="/" class="btn btn-back mt-3 w-100">Back</a>
            <div class="text-center mt-3">
                <a href="/register">Don't have an account? Register Now</a>
            </div>
        </form>
    </div>
</body>

</html>
