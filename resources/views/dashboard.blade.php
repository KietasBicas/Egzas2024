<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product-main Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
                {{-- <x-welcome /> --}}


                <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->

<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>

      
            <div href="#" class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                
                
                <div class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="https://i5.walmartimages.com/asr/40cec13e-c865-4d3b-ba87-571c5791dbf4_1.a4c9f77199e2e29c8791330e430f7baa.jpeg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">The Bullet 🌬️</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">$999</p>
                <a href="/skateboards/1">Duagiau</a>
                
                </div>

            <div href="#" class="group">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://th.bing.com/th/id/R.b02c1dc0297b0fe9efff065daf0a8171?rik=3ubKYvGcOR1b5Q&pid=ImgRaw&r=0" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700">Back to the Classics 🎱</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$777</p>
            <a href="/skateboards/1">Duagiau</a>
            </div>

            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://th.bing.com/th/id/OIP.56sePVvc40NdWZaUD5b-4QAAAA?rs=1&pid=ImgDetMain" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Nomad Trickster Board😳</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">$888</p>
                <a href="/skateboards/1">Duagiau</a>
            </div>

            <div href="#" class="group">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://cdn.shopify.com/s/files/1/0067/2445/2412/products/CRASH-SKATE-DECK.jpg?v=1669877849" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700">Art Board 🎲 Back</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$666</p>
            <a href="/skateboards/1">Duagiau</a>
            
            </div>

            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://plaze-shop.de/wp-content/uploads/2022/05/Santa_Cruz_Braun_Munchies_Everslick_8.25_plaze-shop_1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">placeholder</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">$---</p>
                <a href="/skateboards/1">Duagiau</a>
                
            </div>
            
            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://plaze-shop.de/wp-content/uploads/2022/05/Santa_Cruz_Braun_Munchies_Everslick_8.25_plaze-shop_1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">placeholder</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">$---</p>
                <a href="/skateboards/1">Duagiau</a>
                
            </div>

            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://plaze-shop.de/wp-content/uploads/2022/05/Santa_Cruz_Braun_Munchies_Everslick_8.25_plaze-shop_1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">placeholder</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">$---</p>
                <a href="/skateboards/1">Duagiau</a>

            </div>
            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://plaze-shop.de/wp-content/uploads/2022/05/Santa_Cruz_Braun_Munchies_Everslick_8.25_plaze-shop_1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">placeholder</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">$---</p>
                <a href="/skateboards/1">Duagiau</a>

            </div>
            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://plaze-shop.de/wp-content/uploads/2022/05/Santa_Cruz_Braun_Munchies_Everslick_8.25_plaze-shop_1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">placeholder</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">$---</p>
                <a href="/skateboards/1">Duagiau</a>

            </div>

            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://plaze-shop.de/wp-content/uploads/2022/05/Santa_Cruz_Braun_Munchies_Everslick_8.25_plaze-shop_1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">placeholder</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">$---</p>
                <a href="/skateboards/1">Duagiau</a>

            </div>


        <!-- More products... -->
      </div>
    </div>
  </div>




            </div>
        </div>
    </div>
</x-app-layout>
