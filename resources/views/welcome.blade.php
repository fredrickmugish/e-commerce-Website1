<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite('resources/js/app.js')
                   
    </head>
    <body class="antialiased">
     
     
        <!--Main Navigation-->
<div class="container  mx-auto">
    <div class="md:flex md:flex-row justify-between">
    <div class="flex flex-row justify-center">
<div class="bg-gradient-to-r from-purple-600 to-red-600 w-10 h-10 rounded-lg"></div>
<h1 class="text-3xl text-gray-600 ml-2">Logo</h1>
</div>
<div class="mt-2">
<a href="" class="text-gray-600 hover:text-purple-700 p-4">Home</a>
<a href="" class="text-gray-600 hover:text-purple-700 p-4">Shop</a>
<a href="" class="text-gray-600 hover:text-purple-700 p-4">Blog</a>
<a href="" class="text-gray-600 hover:text-purple-700 p-4">Contact</a>
<a href="" class="bg-purple-600 text-white hover:bg-purple-700 p-3 px-5 rounded-full">
     <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 inline-block" >
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
  </svg>
  Cart(0)</a>
</div>
    </div>


<!--Hello section-->
<div class="md:flex md:flex-row mt-20">
    <div class="w-2/5 flex flex-col justify-center">
<h1 class="font-serif text-5xl text-gray-600">Welcome at Mugisha Shopping Mall</h1>
<p class="uppercase text-gray-600 tracking-wide">Our brand Tagline goes Here</p>
<p class="uppercase text-gray-600 tracking-wide">Our brand Motto Goes Here</p>
<a href="#"  class="bg-gradient-to-r from-red-600 to bg-pink-500 rounded-full py-4 px-8 text-gray-50 uppercase text-xl self-start my-5">Shop Now</a>
</div>
    <div class="w-3/5">
    <img src="{{asset('img/shop.jpg')}}" class="w-full rounded-tl-lg rounded-tr-lg"/></div>
</div>



<!--Mens Collection--->

<div class="my-20">
<div class="flex flex-row justify-between">
    <h2 class="text-3xl">Men's Collection</h2>
    <a href="#" class="text-lg flex flex-row">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-7 ml-1">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
      </svg> View All</a>
</div>

<div class="grid grid-flow-row grid-cols-4 gap-10">
    <div class="shadow-lg rounded-lg">
        <a href="#">
        <img src="{{asset('img/tshirt.avif')}}"class="rounded-tl-lg rounded-tr-lg">  
        </a>
        <div class="p-5">
            <h2><a href="#">Men's T-shirt</a></h2>
        </div>
        <div class="flex flex-row my-3">
        <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
        <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
        <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
        <div class="bg-red-500 rounded-full h-5 w-5 shadow-md mr-2"></div>
        <div class="bg-green-600 rounded-full h-5 w-5 shadow-md mr-2"></div>
        </div>
        <div class="flex flex-row my-3">
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XL</div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XXL</div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">L</div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">M</div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">S</div>
        </div>
        <div class="flex flex-row justify-between">
            <a href="#" class="bg-gradient-to-r from-red-600 to bg-pink-500 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-pink-600 to to-pink-600">
                <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 inline-block" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                  </svg>
                Add to Cart
            </a>
        <div class="flex flex-row justify-between">
            <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-purple-600 to-purple-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                  </svg>
                View Details
            </a>
        </div>
        </div>
    
    </div>

        <div class="shadow-lg rounded-lg">
            <a href="#">
            <img src="{{asset('img/jeans.webp')}}"class="rounded-tl-lg rounded-tr-lg">  
            </a>
            <div class="p-5">
                <h2><a href="#">Men's Jeans</a></h2>
            </div>
            <div class="flex flex-row my-3">
            <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-red-500 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-green-600 rounded-full h-5 w-5 shadow-md mr-2"></div>
            </div>
            <div class="flex flex-row my-3">
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XXL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">L</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">M</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">S</div>
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-gradient-to-r from-red-600 to bg-pink-500 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-pink-600 to to-pink-600">
                    <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 inline-block" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                    Add to Cart
                </a>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-purple-600 to-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                      </svg>
                    View Details
                </a>
            </div>
            </div>
        
        
        </div>

        <div class="shadow-lg rounded-lg">
            <a href="#">
            <img src="{{asset('img/shoes.avif')}}"class="rounded-tl-lg rounded-tr-lg">  
            </a>
            <div class="p-5">
                <h2><a href="#">Nike Shoes</a></h2>
            </div>
            <div class="flex flex-row my-3">
            <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-red-500 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-green-600 rounded-full h-5 w-5 shadow-md mr-2"></div>
            </div>
            <div class="flex flex-row my-3">
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XXL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">L</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">M</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">S</div>
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-gradient-to-r from-red-600 to bg-pink-500 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-pink-600 to to-pink-600">
                    <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 inline-block" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                    Add to Cart
                </a>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-purple-600 to-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                      </svg>
                    View Details
                </a>
            </div>
            </div>
        
        </div>

        <div class="shadow-lg rounded-lg">
            <a href="#">
            <img src="{{asset('img/shat.webp')}}"class="rounded-tl-lg rounded-tr-lg">  
            </a>
            <div class="p-5">
                <h2><a href="#">Men's shirts</a></h2>
            </div>
            <div class="flex flex-row my-3">
            <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-red-500 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-green-600 rounded-full h-5 w-5 shadow-md mr-2"></div>
            </div>
            <div class="flex flex-row my-3">
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XXL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">L</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">M</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">S</div>
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-gradient-to-r from-red-600 to bg-pink-500 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-pink-600 to to-pink-600">
                    <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 inline-block" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                    Add to Cart
                </a>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-purple-600 to-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                      </svg>
                    View Details
                </a>
            </div>
            </div>

        </div>


        <!--Women Collections-->

        <div class="shadow-lg rounded-lg">
            <a href="#">
            <img src="{{asset('img/tops.webp')}}"class="rounded-tl-lg rounded-tr-lg">  
            </a>
            <div class="p-5">
                <h2><a href="#">Women tops</a></h2>
            </div>
            <div class="flex flex-row my-3">
            <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-red-500 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-green-600 rounded-full h-5 w-5 shadow-md mr-2"></div>
            </div>
            <div class="flex flex-row my-3">
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XXL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">L</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">M</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">S</div>
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-gradient-to-r from-red-600 to bg-pink-500 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-pink-600 to to-pink-600">
                    <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 inline-block" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                    Add to Cart
                </a>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-purple-600 to-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                      </svg>
                    View Details
                </a>
            </div>
            </div>

        </div>


        <div class="shadow-lg rounded-lg">
            <a href="#">
            <img src="{{asset('img/sandal.webp')}}"class="rounded-tl-lg rounded-tr-lg">  
            </a>
            <div class="p-5">
                <h2><a href="#">Women sandals</a></h2>
            </div>
            <div class="flex flex-row my-3">
            <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-red-500 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-green-600 rounded-full h-5 w-5 shadow-md mr-2"></div>
            </div>
            <div class="flex flex-row my-3">
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XXL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">L</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">M</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">S</div>
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-gradient-to-r from-red-600 to bg-pink-500 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-pink-600 to to-pink-600">
                    <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 inline-block" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                    Add to Cart
                </a>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-purple-600 to-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                      </svg>
                    View Details
                </a>
            </div>
            </div>

        </div>



        <div class="shadow-lg rounded-lg">
            <a href="#">
            <img src="{{asset('img/beach.webp')}}"class="rounded-tl-lg rounded-tr-lg">  
            </a>
            <div class="p-5">
                <h2><a href="#">Beach dress</a></h2>
            </div>
            <div class="flex flex-row my-3">
            <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-red-500 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-green-600 rounded-full h-5 w-5 shadow-md mr-2"></div>
            </div>
            <div class="flex flex-row my-3">
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XXL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">L</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">M</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">S</div>
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-gradient-to-r from-red-600 to bg-pink-500 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-pink-600 to to-pink-600">
                    <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 inline-block" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                    Add to Cart
                </a>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-purple-600 to-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                      </svg>
                    View Details
                </a>
            </div>
            </div>

        </div>


        <div class="shadow-lg rounded-lg">
            <a href="#">
            <img src="{{asset('img/ladies.jpeg')}}"class="rounded-tl-lg rounded-tr-lg">  
            </a>
            <div class="p-5">
                <h2><a href="#">Apparel dress</a></h2>
            </div>
            <div class="flex flex-row my-3">
            <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-red-500 rounded-full h-5 w-5 shadow-md mr-2"></div>
            <div class="bg-green-600 rounded-full h-5 w-5 shadow-md mr-2"></div>
            </div>
            <div class="flex flex-row my-3">
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XXL</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">L</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">M</div>
                <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">S</div>
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-gradient-to-r from-red-600 to bg-pink-500 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-pink-600 to to-pink-600">
                    <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 inline-block" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                    Add to Cart
                </a>
            <div class="flex flex-row justify-between">
                <a href="#" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50 self-start my-5 flex flex-row hover:from-purple-600 to-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                      </svg>
                    View Details
                </a>
            </div>
            </div>



</div>
    </body>
</html>
