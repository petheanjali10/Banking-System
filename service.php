<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        header{
         background-color: lightblue;
     }
     footer{
         background-color: lightblue;
     }
    </style> 
    <title>
        Services
    </title>
</head>

<body>
    <!-- Navigation bar -->
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">

                <span class="ml-3 text-xl">Indian Bank</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
                <a class="mr-5 hover:text-gray-900" href="about.php">About Us</a>
                <a class="mr-5 hover:text-gray-900" href="privacy.php">Privacy</a>

            </nav>

        </div>
    </header>
    <!-- Navigation bar eneded -->

    <!-- Body part -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    <div class="w-24 h-full bg-indigo-500"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0"> Our Businesses</h1>
                    <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">Indian Bank is one of India’s leading
                        private banks and was among the first to receive approval from the Reserve Bank of India (RBI)
                        to set up a private sector bank in 1994.


                        Today, HDFC Bank has a banking network of 5,608 branches and 14,897 ATM's in 2,902 cities/towns.


                    </p>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full"
                            src="https://source.unsplash.com/1203x503/?bank,cash">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Retail Banking</h2>
                    <p class="text-base leading-relaxed mt-2">Indian Bank offers a diverse range of financial products
                        and banking services to customers through a growing branch and ATM network and digital channels
                        such as Netbanking, Phonebanking and MobileBanking.</p>

                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full"
                            src="https://source.unsplash.com/1204x504/?bank,cash">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Wholesale Banking</h2>
                    <p class="text-base leading-relaxed mt-2">Indian Bank offers a wide gamut of commercial and
                        transactional banking services to businesses and organizations of all sizes. Our services
                        include working capital finance, trade services, transactional services and cash management.</p>

                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full"
                            src="https://source.unsplash.com/1205x505/?bank,cash">
                    </div>
                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Treasury</h2>
                    <p class="text-base leading-relaxed mt-2">Under our treasury services, we help businesses generate
                        better returns on their funds and manage financial risk. We focus on three main product areas:
                        foreign exchange and derivatives, local currency money market and debt securities, and equities.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- body part ended -->
    <!-- Footer part -->
    <footer class="text-gray-600 body-font">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">

                    </svg>
                    <span class="ml-3 text-xl">Indian Bank</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">Grow with Us...!</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">About Us</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="overview.php">Overview</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="career.php">Careers</a>
                        </li>
                       
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Useful Links</h2>
                    <nav class="list-none mb-10">
                      
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="links.php">Quick Links</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="terms.php">Terms & Conditions</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Need Help</h2>
                    <nav class="list-none mb-10">
                        
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="locate.php">Locate Us</a>
                        </li>
                       
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="contact.php">Contact Us</a>
                        </li>
                    </nav>
                </div>

            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© Indian Bank —
                    <a href="https://twitter.com/AnjaliPethe1" rel="noopener noreferrer"
                        class="text-gray-600 ml-1">@AnjaliPethe1</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500" href="https://www.facebook.com/anjali.pethe.3">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500" href="https://twitter.com/AnjaliPethe1">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500" href="https://www.instagram.com/im_anjali10/">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500" href="https://www.linkedin.com/in/anjali-pethe-2900251b6/">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <!-- Footer part eneded -->
</body>

</html>