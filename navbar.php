<body>

    <!-- Navbar -->
    <nav class="relative container mx-auto p-6">

        <!-- Flex Container -->
        <div class="flex item-center justify-between">

            <!-- Logo -->
            <div class="pt=2">
                <img src="https://raw.githubusercontent.com/bradtraversy/tailwind-landing-page/main/img/logo.svg"
                    alt="" />
            </div>

            <!-- Menu items -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-orange-600">Product</a>
                <a href="#" class="hover:text-orange-600">Pricing</a>
                <a href="#" class="hover:text-orange-600">Careers</a>
                <a href="#" class="hover:text-orange-600">About Us</a>
                <a href="#" class="hover:text-orange-600">Community</a>
            </div>

            <!-- Button -->
            <a href="#"
                class="hidden md:block p-3 px-6 pt-2 text-white bg-orange-600 rounded-full baseline hover:bg-orange-400">
                Get Started
            </a>

            <!-- Hamburger Icon -->
            <button id="menu-button" class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden">
            <div id="menu"
                class="absolute flex flex-col items-center hidden self-end hidden py-8 mt-10 space-y-6 font-bold bg-white-900 sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                <a href="#">Pricing</a>
                <a href="#">Product</a>
                <a href="#">About Us</a>
                <a href="#">Careers</a>
                <a href="#">Community</a>
            </div>
        </div>
    </nav>