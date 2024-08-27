<style>
        body {
            background-color: #f4f7f6;
            font-family: Arial, sans-serif;
        }
        .section-title {
            margin-bottom: 50px;
        }
        .section-title h2 {
            font-size: 2.5rem;
            color: #333;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .form-group {
            position: relative;
            margin-bottom: 1rem;
        }
        .form-control {
            border-radius: 0.25rem;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
            padding-left: 2.5rem;
        }
        .input-group-addon {
            position: absolute;
            top: 50%;
            left: 0.5rem;
            transform: translateY(-50%);
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.5rem;
        }
        .input-group-addon .glyphicon {
            color: #6c757d;
        }
        .login-container {
            background: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        .login-container input[type="text"], .login-container input[type="password"] {
            border-radius: 0.25rem;
        }
        .btn-login {
            background-color: #6c757d; /* Cinza escuro */
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 1rem;
        }
        .btn-login:hover {
            background-color: #5a6268; /* Cinza mais escuro */
        }
    </style>
</head>
<body>

<section style="min-height: calc(100vh - 83px);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="login-container text-center">
                    <div class="section-title">
                        <h2>Login</h2>
                    </div>
                    <form id="login_form" >
                        <div class="form-group">
                            <div class="input-group">
                                
                                <input id = "username"type="text" placeholder="Username" name="username" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                
                                <input type="password" id="password" placeholder="Password" name="password" class="form-control"/>
                            </div>
                        </div>
                        <button onclick="login()" type="submit" id="btn_login" class="btn btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include Bootstrap JS and dependencies if needed -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
