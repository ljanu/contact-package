<x-dynamic-component :component="config('contact.layout_name')">
    <x-slot :name="config('contact.slot_name')">


        <h1>Contact US any time</h1>

        {{-- formulář --}}
        <form action="{{route('contact')}}" method="post">
            @csrf

            <div class="flex flex-col">
                <input type="text" name="name" placeholder="Your name Pleas">
                <input type="text" name="email" placeholder="Your valid email">
                <textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
                <input type="submit" value="Submit">

            </div>
        </form>


    </x-slot>
</x-dynamic-component>

