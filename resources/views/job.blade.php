<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:header>
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p>
        This Job Pays {{$job['salary']}} Per Year.
    </p>

</x-layout>
