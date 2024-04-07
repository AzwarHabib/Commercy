<div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
     class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
     class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0"
     style="background-image: linear-gradient(180deg, rgb(0 0 0) 0%, rgb(24 41 84) 0%, rgb(1 8 25) 100%)">
    <div class="flex items-center justify-center mt-8" style="margin-left:-18px">

        <div class="d-inline-block">
            <img src="/favicon.ico" style="height:50px; display:inline-block" alt="Pie Dev">
            <span
                    class="text-white mx-2 font-semibold font-size-6">Benvenuto, {{auth()->guard('admin')->user()->name}}</span>
        </div>
    </div>

    <nav class="mt-10">

        {{-- <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="/customer/dashboard"> --}}
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('dashboard',app()->getLocale() )}}">

            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
            </svg>

            <span class="mx-3">Dashboard</span>
        </a>
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('profileAdmin', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path
                        d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
            </svg>

            <span class="mx-3">Il mio profilo</span>
        </a>
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('products.index', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path
                        d="M17.638,6.181h-3.844C13.581,4.273,11.963,2.786,10,2.786c-1.962,0-3.581,1.487-3.793,3.395H2.362c-0.233,0-0.424,0.191-0.424,0.424v10.184c0,0.232,0.191,0.424,0.424,0.424h15.276c0.234,0,0.425-0.191,0.425-0.424V6.605C18.062,6.372,17.872,6.181,17.638,6.181 M13.395,9.151c0.234,0,0.425,0.191,0.425,0.424S13.629,10,13.395,10c-0.232,0-0.424-0.191-0.424-0.424S13.162,9.151,13.395,9.151 M10,3.635c1.493,0,2.729,1.109,2.936,2.546H7.064C7.271,4.744,8.506,3.635,10,3.635 M6.605,9.151c0.233,0,0.424,0.191,0.424,0.424S6.838,10,6.605,10c-0.233,0-0.424-0.191-0.424-0.424S6.372,9.151,6.605,9.151 M17.214,16.365H2.786V7.029h3.395v1.347C5.687,8.552,5.332,9.021,5.332,9.575c0,0.703,0.571,1.273,1.273,1.273c0.702,0,1.273-0.57,1.273-1.273c0-0.554-0.354-1.023-0.849-1.199V7.029h5.941v1.347c-0.495,0.176-0.849,0.645-0.849,1.199c0,0.703,0.57,1.273,1.272,1.273s1.273-0.57,1.273-1.273c0-0.554-0.354-1.023-0.849-1.199V7.029h3.395V16.365z"></path>
            </svg>

            <span class="mx-3">Prodotti</span>
        </a>
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('brands.index', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path d="M10,1.529c-4.679,0-8.471,3.792-8.471,8.471c0,4.68,3.792,8.471,8.471,8.471c4.68,0,8.471-3.791,8.471-8.471C18.471,5.321,14.68,1.529,10,1.529 M10,17.579c-4.18,0-7.579-3.399-7.579-7.579S5.82,2.421,10,2.421S17.579,5.82,17.579,10S14.18,17.579,10,17.579 M14.348,10c0,0.245-0.201,0.446-0.446,0.446h-5c-0.246,0-0.446-0.201-0.446-0.446s0.2-0.446,0.446-0.446h5C14.146,9.554,14.348,9.755,14.348,10 M14.348,12.675c0,0.245-0.201,0.446-0.446,0.446h-5c-0.246,0-0.446-0.201-0.446-0.446s0.2-0.445,0.446-0.445h5C14.146,12.229,14.348,12.43,14.348,12.675 M7.394,10c0,0.245-0.2,0.446-0.446,0.446H6.099c-0.245,0-0.446-0.201-0.446-0.446s0.201-0.446,0.446-0.446h0.849C7.194,9.554,7.394,9.755,7.394,10 M7.394,12.675c0,0.245-0.2,0.446-0.446,0.446H6.099c-0.245,0-0.446-0.201-0.446-0.446s0.201-0.445,0.446-0.445h0.849C7.194,12.229,7.394,12.43,7.394,12.675 M14.348,7.325c0,0.246-0.201,0.446-0.446,0.446h-5c-0.246,0-0.446-0.2-0.446-0.446c0-0.245,0.2-0.446,0.446-0.446h5C14.146,6.879,14.348,7.08,14.348,7.325 M7.394,7.325c0,0.246-0.2,0.446-0.446,0.446H6.099c-0.245,0-0.446-0.2-0.446-0.446c0-0.245,0.201-0.446,0.446-0.446h0.849C7.194,6.879,7.394,7.08,7.394,7.325"></path>
            </svg>

            <span class="mx-3">Marchi</span>
        </a>
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('attributes.index', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path d="M6.634,13.591H2.146c-0.247,0-0.449,0.201-0.449,0.448v2.692c0,0.247,0.202,0.449,0.449,0.449h4.488c0.247,0,0.449-0.202,0.449-0.449v-2.692C7.083,13.792,6.881,13.591,6.634,13.591 M6.185,16.283h-3.59v-1.795h3.59V16.283zM6.634,8.205H2.146c-0.247,0-0.449,0.202-0.449,0.449v2.692c0,0.247,0.202,0.449,0.449,0.449h4.488c0.247,0,0.449-0.202,0.449-0.449V8.653C7.083,8.407,6.881,8.205,6.634,8.205 M6.185,10.897h-3.59V9.103h3.59V10.897z M6.634,2.819H2.146c-0.247,0-0.449,0.202-0.449,0.449V5.96c0,0.247,0.202,0.449,0.449,0.449h4.488c0.247,0,0.449-0.202,0.449-0.449V3.268C7.083,3.021,6.881,2.819,6.634,2.819 M6.185,5.512h-3.59V3.717h3.59V5.512z M15.933,5.683c-0.175-0.168-0.361-0.33-0.555-0.479l1.677-1.613c0.297-0.281,0.088-0.772-0.31-0.772H9.336c-0.249,0-0.448,0.202-0.448,0.449v7.107c0,0.395,0.471,0.598,0.758,0.326l1.797-1.728c0.054,0.045,0.107,0.094,0.161,0.146c0.802,0.767,1.243,1.786,1.243,2.867c0,1.071-0.435,2.078-1.227,2.837c-0.7,0.671-1.354,1.086-2.345,1.169c-0.482,0.041-0.577,0.733-0.092,0.875c0.687,0.209,1.12,0.314,1.839,0.314c0.932,0,1.838-0.173,2.673-0.505c0.835-0.33,1.603-0.819,2.262-1.449c1.322-1.266,2.346-2.953,2.346-4.751C18.303,8.665,17.272,6.964,15.933,5.683 M15.336,14.578c-1.124,1.077-2.619,1.681-4.217,1.705c0.408-0.221,0.788-0.491,1.122-0.812c0.97-0.929,1.504-2.168,1.504-3.485c0-1.328-0.539-2.578-1.521-3.516c-0.178-0.17-0.357-0.321-0.548-0.456c-0.125-0.089-0.379-0.146-0.569,0.041L9.769,9.327v-5.61h5.861l-1.264,1.216c-0.099,0.094-0.148,0.229-0.137,0.366c0.014,0.134,0.088,0.258,0.202,0.332c0.313,0.204,0.61,0.44,0.882,0.7c1.158,1.111,2.092,2.581,2.092,4.145C17.405,12.026,16.48,13.482,15.336,14.578"></path>            </svg>

            <span class="mx-3">Attributi</span>
        </a>
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('categories.index', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path
                        d="M17.592,8.936l-6.531-6.534c-0.593-0.631-0.751-0.245-0.751,0.056l0.002,2.999L5.427,9.075H2.491c-0.839,0-0.162,0.901-0.311,0.752l3.683,3.678l-3.081,3.108c-0.17,0.171-0.17,0.449,0,0.62c0.169,0.17,0.448,0.17,0.618,0l3.098-3.093l3.675,3.685c-0.099-0.099,0.773,0.474,0.773-0.296v-2.965l3.601-4.872l2.734-0.005C17.73,9.688,18.326,9.669,17.592,8.936 M3.534,9.904h1.906l4.659,4.66v1.906L3.534,9.904z M10.522,13.717L6.287,9.48l4.325-3.124l3.088,3.124L10.522,13.717z M14.335,8.845l-3.177-3.177V3.762l5.083,5.083H14.335z"></path>
            </svg>

            <span class="mx-3">Categorie</span>
        </a>
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('adminOrders.index', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path
                        d="M12.319,5.792L8.836,2.328C8.589,2.08,8.269,2.295,8.269,2.573v1.534C8.115,4.091,7.937,4.084,7.783,4.084c-2.592,0-4.7,2.097-4.7,4.676c0,1.749,0.968,3.337,2.528,4.146c0.352,0.194,0.651-0.257,0.424-0.529c-0.415-0.492-0.643-1.118-0.643-1.762c0-1.514,1.261-2.747,2.787-2.747c0.029,0,0.06,0,0.09,0.002v1.632c0,0.335,0.378,0.435,0.568,0.245l3.483-3.464C12.455,6.147,12.455,5.928,12.319,5.792 M8.938,8.67V7.554c0-0.411-0.528-0.377-0.781-0.377c-1.906,0-3.457,1.542-3.457,3.438c0,0.271,0.033,0.542,0.097,0.805C4.149,10.7,3.775,9.762,3.775,8.76c0-2.197,1.798-3.985,4.008-3.985c0.251,0,0.501,0.023,0.744,0.069c0.212,0.039,0.412-0.124,0.412-0.34v-1.1l2.646,2.633L8.938,8.67z M14.389,7.107c-0.34-0.18-0.662,0.244-0.424,0.529c0.416,0.493,0.644,1.118,0.644,1.762c0,1.515-1.272,2.747-2.798,2.747c-0.029,0-0.061,0-0.089-0.002v-1.631c0-0.354-0.382-0.419-0.558-0.246l-3.482,3.465c-0.136,0.136-0.136,0.355,0,0.49l3.482,3.465c0.189,0.186,0.568,0.096,0.568-0.245v-1.533c0.153,0.016,0.331,0.022,0.484,0.022c2.592,0,4.7-2.098,4.7-4.677C16.917,9.506,15.948,7.917,14.389,7.107 M12.217,15.238c-0.251,0-0.501-0.022-0.743-0.069c-0.212-0.039-0.411,0.125-0.411,0.341v1.101l-2.646-2.634l2.646-2.633v1.116c0,0.174,0.126,0.318,0.295,0.343c0.158,0.024,0.318,0.034,0.486,0.034c1.905,0,3.456-1.542,3.456-3.438c0-0.271-0.032-0.541-0.097-0.804c0.648,0.719,1.022,1.659,1.022,2.66C16.226,13.451,14.428,15.238,12.217,15.238"></path>
            </svg>

            <span class="mx-3">Transazioni</span>
        </a>

        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('customers.index', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path
                        d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z"></path>
            </svg>

            <span class="mx-3">Utenti</span>
        </a>
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('subscribers.index', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path
                        d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
            </svg>

            <span class="mx-3">Newsletter</span>
        </a>
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('coupon.index', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path
                        d="M17.35,2.219h-5.934c-0.115,0-0.225,0.045-0.307,0.128l-8.762,8.762c-0.171,0.168-0.171,0.443,0,0.611l5.933,5.934c0.167,0.171,0.443,0.169,0.612,0l8.762-8.763c0.083-0.083,0.128-0.192,0.128-0.307V2.651C17.781,2.414,17.587,2.219,17.35,2.219M16.916,8.405l-8.332,8.332l-5.321-5.321l8.333-8.332h5.32V8.405z M13.891,4.367c-0.957,0-1.729,0.772-1.729,1.729c0,0.957,0.771,1.729,1.729,1.729s1.729-0.772,1.729-1.729C15.619,5.14,14.848,4.367,13.891,4.367 M14.502,6.708c-0.326,0.326-0.896,0.326-1.223,0c-0.338-0.342-0.338-0.882,0-1.224c0.342-0.337,0.881-0.337,1.223,0C14.84,5.826,14.84,6.366,14.502,6.708"></path>
            </svg>

            <span class="mx-3">Coupon</span>
        </a>
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{route('logActivity', app()->getLocale())}}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15.684,16.959L10.879,8.52c0.886-0.343,1.517-1.193,1.517-2.186c0-1.296-1.076-2.323-2.396-2.323S7.604,5.037,7.604,6.333c0,0.993,0.63,1.843,1.517,2.186l-4.818,8.439c-0.189,0.311,0.038,0.708,0.412,0.708h10.558C15.645,17.667,15.871,17.27,15.684,16.959 M8.562,6.333c0-0.778,0.645-1.382,1.438-1.382s1.438,0.604,1.438,1.382c0,0.779-0.645,1.412-1.438,1.412S8.562,7.113,8.562,6.333 M5.55,16.726L10,8.91l4.435,7.815H5.55z M15.285,9.62c1.26-2.046,1.26-4.525,0-6.572c-0.138-0.223-0.064-0.512,0.162-0.646c0.227-0.134,0.521-0.063,0.658,0.16c1.443,2.346,1.443,5.2,0,7.546c-0.236,0.382-0.641,0.17-0.658,0.159C15.221,10.131,15.147,9.842,15.285,9.62 M13.395,8.008c0.475-1.063,0.475-2.286,0-3.349c-0.106-0.238,0.004-0.515,0.246-0.62c0.242-0.104,0.525,0.004,0.632,0.242c0.583,1.305,0.583,2.801,0,4.106c-0.214,0.479-0.747,0.192-0.632,0.242C13.398,8.523,13.288,8.247,13.395,8.008 M3.895,10.107c-1.444-2.346-1.444-5.2,0-7.546c0.137-0.223,0.431-0.294,0.658-0.16c0.226,0.135,0.299,0.424,0.162,0.646c-1.26,2.047-1.26,4.525,0,6.572c0.137,0.223,0.064,0.512-0.162,0.646C4.535,10.277,4.131,10.489,3.895,10.107 M5.728,8.387c-0.583-1.305-0.583-2.801,0-4.106c0.106-0.238,0.39-0.346,0.631-0.242c0.242,0.105,0.353,0.382,0.247,0.62c-0.475,1.063-0.475,2.286,0,3.349c0.106,0.238-0.004,0.515-0.247,0.62c-0.062,0.027-0.128,0.04-0.192,0.04C5.982,8.668,5.807,8.563,5.728,8.387"></path>
            </svg>
            <span class="mx-3">Attività utenti</span>
        </a>
        @if(auth()->guard('admin')->user()->id == 1)
            <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
               href="{{route('importData', app()->getLocale())}}">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17.896,12.706v-0.005v-0.003L15.855,2.507c-0.046-0.24-0.255-0.413-0.5-0.413H4.899c-0.24,0-0.447,0.166-0.498,0.4L2.106,12.696c-0.008,0.035-0.013,0.071-0.013,0.107v4.593c0,0.28,0.229,0.51,0.51,0.51h14.792c0.28,0,0.51-0.229,0.51-0.51v-4.593C17.906,12.77,17.904,12.737,17.896,12.706 M5.31,3.114h9.625l1.842,9.179h-4.481c-0.28,0-0.51,0.229-0.51,0.511c0,0.703-1.081,1.546-1.785,1.546c-0.704,0-1.785-0.843-1.785-1.546c0-0.281-0.229-0.511-0.51-0.511H3.239L5.31,3.114zM16.886,16.886H3.114v-3.572H7.25c0.235,1.021,1.658,2.032,2.75,2.032c1.092,0,2.515-1.012,2.749-2.032h4.137V16.886z"></path>
                </svg>

                <span class="mx-3">Import/Export Excel</span>
            </a>
            <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
               href="{{route('AdminLogActivity', app()->getLocale())}}">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15.684,16.959L10.879,8.52c0.886-0.343,1.517-1.193,1.517-2.186c0-1.296-1.076-2.323-2.396-2.323S7.604,5.037,7.604,6.333c0,0.993,0.63,1.843,1.517,2.186l-4.818,8.439c-0.189,0.311,0.038,0.708,0.412,0.708h10.558C15.645,17.667,15.871,17.27,15.684,16.959 M8.562,6.333c0-0.778,0.645-1.382,1.438-1.382s1.438,0.604,1.438,1.382c0,0.779-0.645,1.412-1.438,1.412S8.562,7.113,8.562,6.333 M5.55,16.726L10,8.91l4.435,7.815H5.55z M15.285,9.62c1.26-2.046,1.26-4.525,0-6.572c-0.138-0.223-0.064-0.512,0.162-0.646c0.227-0.134,0.521-0.063,0.658,0.16c1.443,2.346,1.443,5.2,0,7.546c-0.236,0.382-0.641,0.17-0.658,0.159C15.221,10.131,15.147,9.842,15.285,9.62 M13.395,8.008c0.475-1.063,0.475-2.286,0-3.349c-0.106-0.238,0.004-0.515,0.246-0.62c0.242-0.104,0.525,0.004,0.632,0.242c0.583,1.305,0.583,2.801,0,4.106c-0.214,0.479-0.747,0.192-0.632,0.242C13.398,8.523,13.288,8.247,13.395,8.008 M3.895,10.107c-1.444-2.346-1.444-5.2,0-7.546c0.137-0.223,0.431-0.294,0.658-0.16c0.226,0.135,0.299,0.424,0.162,0.646c-1.26,2.047-1.26,4.525,0,6.572c0.137,0.223,0.064,0.512-0.162,0.646C4.535,10.277,4.131,10.489,3.895,10.107 M5.728,8.387c-0.583-1.305-0.583-2.801,0-4.106c0.106-0.238,0.39-0.346,0.631-0.242c0.242,0.105,0.353,0.382,0.247,0.62c-0.475,1.063-0.475,2.286,0,3.349c0.106,0.238-0.004,0.515-0.247,0.62c-0.062,0.027-0.128,0.04-0.192,0.04C5.982,8.668,5.807,8.563,5.728,8.387"></path>
                </svg>
                <span class="mx-3">Attività Admin</span>
            </a>
        @endif
        <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
           href="{{ route('logout', ['lang' => app()->getLocale()]) }}"
           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
            {{ __('Esci') }}
        </a>
        <form id="logout-form" action="{{ route('adminLogout', app()->getLocale()) }}" method="POST"
              class="d-none">
            @csrf
        </form>
    </nav>
</div>
