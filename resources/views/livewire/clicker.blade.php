<div>
@if(session('success'))
<span class="w-100 py-3 bg-green-300 rounded text-white">{{session('success')}}</span>
@endif
    <form wire:submit='createNewUser' action="">

     <input class="block rounded border border-gray-100 px-3 py-1 mb-1 mt-5 ml-6" wire:model='name' type="text" placeholder="username">
     @error('name')

     <span class="text-red-500 text-xs">{{ $message }}</span>

     @enderror
     <input class="block rounded border border-gray-100 px-3 py-1 mb-1 ml-6" wire:model='email' type="email"  placeholder="email">

     @error('email')

     <span class="text-red-500 text-xs">{{ $message }}</span>

     @enderror
     <input class="block rounded border border-gray-100 px-3 py-1 mb-1 ml-6" wire:model='password' type="password" placeholder="password">
     @error('password')

     <span class="text-red-500 text-xs">{{ $message }}</span>

     @enderror
     <button class="black rounded px-3 py-1 bg-gray-400 text-white mt-1 ml-6">Create</button>
    </form>
<br>

</br>
 <h1 style="font-family:sans-serif; font-style:oblique; font-size:25px; color:green;">Displaying all registered users</h1>
    @foreach ($users as $user)
     <h3 class="text-brown-200 bold mt-1 mb-1 ml-6">*{{$user->name}}</h3>
    @endforeach

    <h1 class="bg-gray-200 text-white block">{{$users->links()}}</h1>

</div>
