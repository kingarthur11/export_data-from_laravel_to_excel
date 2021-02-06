@extends('layout.home')

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register')}}" method="post" autocomplete='off'>
                @csrf
                <div class="mb-4">
                    <label for="firstname" class="sr-only">firstname</label>
                    <input type="text" name="firstname" id="firstname" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('firstname') border-red-500 @enderror" value="">
                    @error('firstname')
                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">password</label>
                    <input type="text" name="password" id="password" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
                    @error('firstname')
                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="lastname" class="sr-only">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="lastname"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                    @error('lastname')
                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">email</label>
                    <input type="text" name="email" id="email" placeholder="email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="phonenumber" class="sr-only">phonenumber</label>
                    <input type="text" name="phonenumber" id="phonenumber" placeholder="phonenumber"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                    @error('phonenumber')
                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <div><button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button></div>
        </form>
        </div>
        
    </div>
@endsection