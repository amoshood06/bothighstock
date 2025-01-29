<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account - Crextio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-300">
    <div class="min-h-screen flex items-center justify-center p-4 sm:p-6 md:p-8">
        <div class="w-full max-w-6xl bg-gradient-to-br from-white to-amber-50 rounded-2xl sm:rounded-3xl overflow-hidden shadow-xl lg:flex">
            <!-- Left Side - Form -->
            <div class="w-full p-4 sm:p-6 md:p-8 lg:p-12 lg:w-1/2">
                <div class="flex justify-between items-center">
                    <div class="text-lg sm:text-xl font-medium px-4 sm:px-6 py-1.5 sm:py-2 rounded-full border border-gray-200">
                        Crextio
                    </div>
                    <button class="p-1.5 sm:p-2 hover:bg-gray-100 rounded-full transition-colors">
                        <i class="fas fa-times text-gray-500"></i>
                    </button>
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-12">
                    <h1 class="text-xl sm:text-2xl font-semibold mb-1 sm:mb-2">Create an account</h1>
                    <p class="text-gray-600 text-sm sm:text-base mb-6 sm:mb-8">Sign up and get 30 day free trial</p>

                    <form class="space-y-4 sm:space-y-6">
                        <div>
                            <label for="fullname" class="block text-sm text-gray-600 mb-1.5 sm:mb-2">Full name</label>
                            <input type="text" id="fullname" name="fullname" class="w-full px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg sm:rounded-xl border border-gray-200 focus:ring-2 focus:ring-amber-200 focus:border-amber-400 outline-none transition text-sm sm:text-base" placeholder="Amélie Laurent">
                        </div>

                        <div>
                            <label for="email" class="block text-sm text-gray-600 mb-1.5 sm:mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg sm:rounded-xl border border-gray-200 focus:ring-2 focus:ring-amber-200 focus:border-amber-400 outline-none transition text-sm sm:text-base" placeholder="amélielaurent7622@gmail.com">
                        </div>

                        <div>
                            <label for="password" class="block text-sm text-gray-600 mb-1.5 sm:mb-2">Password</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" class="w-full px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg sm:rounded-xl border border-gray-200 focus:ring-2 focus:ring-amber-200 focus:border-amber-400 outline-none transition text-sm sm:text-base" placeholder="******************">
                                <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500" onclick="togglePassword()">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-amber-300 hover:bg-amber-400 text-black py-2.5 sm:py-3 rounded-lg sm:rounded-xl transition duration-200 text-sm sm:text-base font-medium">
                            Submit
                        </button>

                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                            <button class="flex-1 flex items-center justify-center gap-2 border border-gray-200 px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg sm:rounded-xl hover:bg-gray-50 transition text-sm sm:text-base">
                                <i class="fab fa-apple"></i>
                                Apple
                            </button>
                            <button class="flex-1 flex items-center justify-center gap-2 border border-gray-200 px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg sm:rounded-xl hover:bg-gray-50 transition text-sm sm:text-base">
                                <i class="fab fa-google"></i>
                                Google
                            </button>
                        </div>
                    </form>

                    <div class="mt-6 sm:mt-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-0 text-xs sm:text-sm">
                        <p class="text-gray-600">
                            Have any account? <a href="#" class="text-black hover:underline">Sign in</a>
                        </p>
                        <a href="#" class="text-gray-600 hover:underline">Terms & Conditions</a>
                    </div>
                </div>
            </div>

            <!-- Right Side - Image -->
            <div class="hidden lg:block lg:w-1/2 relative">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/original-86dfa953d305bb830b98877%20(1).jpg-v1UZkQ6LmMlTMya8fPPWdVRn2ZZYib.jpeg" alt="Team collaboration" class="w-full h-full object-cover">
                
                <!-- Calendar Overlay -->
                <div class="absolute top-1/4 right-8 bg-black/80 text-white p-4 rounded-xl">
                    <div class="grid grid-cols-7 gap-4 text-center text-sm">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                        <div>22</div>
                        <div>23</div>
                        <div>24</div>
                        <div>25</div>
                        <div>26</div>
                        <div>27</div>
                        <div>28</div>
                    </div>
                </div>

                <!-- Meeting Cards -->
                <div class="absolute top-8 left-8 bg-amber-300 p-3 rounded-xl text-sm">
                    <p class="font-medium">Task Review With Team</p>
                    <p class="text-xs mt-1">09:30am-10:00am</p>
                </div>

                <div class="absolute bottom-1/4 left-1/3 bg-white p-3 rounded-xl text-sm">
                    <p class="font-medium">Daily Meeting</p>
                    <p class="text-xs mt-1">12:00pm-01:00pm</p>
                    <div class="flex -space-x-2 mt-2">
                        <div class="w-6 h-6 rounded-full bg-gray-300 border-2 border-white"></div>
                        <div class="w-6 h-6 rounded-full bg-gray-300 border-2 border-white"></div>
                        <div class="w-6 h-6 rounded-full bg-gray-300 border-2 border-white"></div>
                        <div class="w-6 h-6 rounded-full bg-gray-300 border-2 border-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.querySelector('#password + button i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>