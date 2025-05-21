<?php
include 'connect.php';
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Registration Form</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Font for nicer typography -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(120deg, #89f7fe 0%, #66a6ff 100%);
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(16px) saturate(180%);
      -webkit-backdrop-filter: blur(16px) saturate(180%);
      border-radius: 1rem;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
      transition: transform 0.3s ease;
    }

    .glass-card:hover {
      transform: scale(1.02);
    }

    .form-input:focus + label,
    .form-input:not(:placeholder-shown) + label {
      transform: translateY(-1.5rem) scale(0.9);
      color: #2563eb;
    }

    label {
      transition: all 0.2s ease-in-out;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center px-4 py-10">

  <div class="max-w-md w-full glass-card p-8 text-white relative">
    <h2 class="text-2xl font-bold text-center mb-6 text-white">🎓 Student Registration</h2>

    <form id="studentForm" class="space-y-6">
      
      <!-- Name Field -->
      <div class="relative">
        <input type="text" id="name" name="name" required placeholder=" " 
               class="form-input block w-full bg-transparent border-b-2 border-white text-white placeholder-transparent focus:outline-none focus:border-blue-500 peer"/>
        <label for="name" class="absolute left-0 top-2.5 text-white peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-focus:top-2.5 peer-focus:text-sm">
          Full Name
        </label>
      </div>

      <!-- Email Field -->
      <div class="relative">
        <input type="email" id="email" name="email" required placeholder=" " 
               class="form-input block w-full bg-transparent border-b-2 border-white text-white placeholder-transparent focus:outline-none focus:border-blue-500 peer"/>
        <label for="email" class="absolute left-0 top-2.5 text-white peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-focus:top-2.5 peer-focus:text-sm">
          Email Address
        </label>
      </div>

      <!-- Phone Field -->
      <div class="relative">
        <input type="tel" id="phone" name="phone" required placeholder=" " 
               class="form-input block w-full bg-transparent border-b-2 border-white text-white placeholder-transparent focus:outline-none focus:border-blue-500 peer"/>
        <label for="phone" class="absolute left-0 top-2.5 text-white peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-focus:top-2.5 peer-focus:text-sm">
          Phone Number
        </label>
      </div>

      <!-- Password Field -->
      <div class="relative">
        <input type="password" id="password" name="password" required placeholder=" " 
               class="form-input block w-full bg-transparent border-b-2 border-white text-white placeholder-transparent focus:outline-none focus:border-blue-500 peer"/>
        <label for="password" class="absolute left-0 top-2.5 text-white peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-focus:top-2.5 peer-focus:text-sm">
          Password
        </label>
      </div>

      <!-- Submit Button -->
      <button type="submit"
              class="w-full mt-4 bg-blue-600 hover:bg-blue-700 transition duration-300 text-white font-semibold py-2 px-4 rounded-lg shadow-lg">
        Register Now
      </button>
    </form>
  </div>

  <!-- JS: Simple validation -->
  <script>
    document.getElementById("studentForm").addEventListener("submit", function (e) {
      e.preventDefault();

      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const password = document.getElementById("password").value;

      if (!name || !email || !phone || !password) {
        alert("Please fill in all fields.");
        return;
      }

      alert("🎉 Successfully Registered!");
    });
  </script>
</body>
</html>
