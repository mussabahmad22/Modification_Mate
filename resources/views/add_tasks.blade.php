<?php
$pagename="tasks";
?>
@include('layouts.header')


<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium ml-3">
        ADD Task
    </h2>
</div>

<div class="intro-y box pb-10">
    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200">
        <form action="#" class="validate-form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="intro-y box col-span-12 lg:col-span-8 p-5">
                <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">

                    <input type="hidden" class="form-control" id="query_id" name="agent_id" value="">
                    <div class="intro-y col-span-12 sm:col-span-6 px-2">
                        <div class="mb-2">Agent Name</div>
                        <input type="text" name="name" class="input w-full border flex-1" value=""
                            placeholder="Enter the name..." required>
                        <span class="text-theme-6">
                            @error('name')
                            {{'Agent Name is required'}}
                            @enderror
                        </span>
                    </div>
           

                    <div class="intro-y col-span-12 sm:col-span-6 px-2">
                        <div class="mb-2">Phone Number</div>
                        <input type="text" name="phone" class="input w-full border flex-1"
                            value=""
                            placeholder="Enter Number..." required>
                        <span class="text-theme-6">
                            @error('phone')
                            {{'Agent phone is required'}}
                            @enderror
                        </span>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6 px-2">
                        <div class="mb-2">Email</div>
                        <input type="email" name="email" class="input w-full border flex-1"
                            value="" placeholder="Enter Email..."
                            required>
                        <span class="text-theme-6">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="intro-y col-span-12 items-center justify-center sm:justify-end mt-5">
                        <button class="button w-30 justify-center block bg-theme-1 text-white ml-2">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')