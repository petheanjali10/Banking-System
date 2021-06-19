<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>
        Make Transaction
    </title>
    <link href="./css/style.css" rel="stylesheet"> 
</head>

<body>

    <!-- Navigation Bar -->
    <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">

        <span class="ml-3 text-xl">Indian Bank</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
        <a class="mr-5 hover:text-gray-900" href="about.php">About Us</a>
        <a class="mr-5 hover:text-gray-900" href="service.php">Services</a>
        <a class="mr-5 hover:text-gray-900" href="privacy.php">Privacy</a>
        

      </nav>

    </div>
  </header>
    <!-- Navigation Bar ended -->






    <!-- Body part -->
    <form  method="POST" action="userinfo.php">
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <div>
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Let's make a transaction...!
                    </h2>

                </div>
                

                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="Account name" class="sr-only">Account Name</label>
                            <input id="name" name="name" type="text" required
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Account name">
                        </div>
                        <br>
                        <div>
                            <label for="number" class="sr-only">Account Number</label>
                            <input id="anumber" name="anumber" type="number" required
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Account Number">
                        </div>

                        <br>
                        <div>
                            <label for="Amount" class="sr-only">Amount</label>
                            <input id="amount" name="amount" type="number" required
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Amount">
                        </div>
                        <br>
                        <div>
                            <label for="Message" class="sr-only">Message</label>
                            <input id="message" name="message" type="textbox"
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Enter a message">
                        </div>
                    </div>


                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <!-- Heroicon name: solid/lock-closed -->

                            </span>
                            Make Transaction
                        </button>
                    </div>

              
            </div>
        </div>
    </form>
    <!-- Body part ended -->
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
                            <a class="text-gray-600 hover:text-gray-800" href="/About US/Overview.html">Overview</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/About US/Career.html">Careers</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/About US/CSR.html">CSR</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/About US/NewsRoom.html">News Room</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Useful Links</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/Useful Links/Privacy.html">Privacy</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/Useful Links/AboutUs.html">About Us</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/Useful Links/QuickLinks.html">Quick
                                Links</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/Useful Links/Terms.html">Terms &
                                Conditions</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Need Help</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/NeedHelp/FAQ.html">FAQs</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/NeedHelp/LocateUs.html">Locate Us</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/NeedHelp/CustomerCare.html">Customer
                                care</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="/NeedHelp/ContactUs.html">Contact Us</a>
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