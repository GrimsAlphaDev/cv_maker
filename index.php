<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CV MAKER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <!-- create nav for CV Maker -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CV Maker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- create nav link -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- create nav link -->
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link" href="about.html">About</a>
                    <a class="nav-link" href="contact_us.html">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row">
                <h3 class="mt-4">Create Your Own CV</h3>
                <div class="row p-3">
                    <form 
                    action="php/create_cv.php" 
                     method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" />
                        </div>
                        <!-- experience -->
                        <div class="mb-3">
                            <label for="experience" class="form-label">Experience</label>
                            <textarea class="form-control" id="experience" rows="3"></textarea>
                        </div>
                        <!-- Add more fields here as needed -->
                        <div id="cv-result" class="mt-3">
                            <!-- CV result will be displayed here -->

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2023 CV Maker. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script>
        // JavaScript code to handle form submission and displaying CV result
        // const form = document.querySelector("form");
        // const cvResult = document.getElementById("cv-result");

        // form.addEventListener("submit", function (event) {
        //     event.preventDefault(); // Prevent form submission

        //     // Fetch form values and create CV content
        //     const name = document.getElementById("name").value;
        //     const email = document.getElementById("email").value;
        //     const phone = document.getElementById("phone").value;

        //     const cvContent = `
        //             <p><strong>Name:</strong> ${name}</p>
        //             <p><strong>Email:</strong> ${email}</p>
        //             <p><strong>Phone:</strong> ${phone}</p>
        //             <!-- Add more content here as needed -->
        //         `;

            // Display CV content in the result div
            // cvResult.innerHTML = cvContent;
        // });
    </script>
</body>

</html>