<x-layout>
    <x-slot:heading>
        Job
    </x-slot:header>
    <h2 class="font-bold text-lg">{{$job->title}}</h2>
    <p>
        This Job Pays {{ $job->salary }} Per Year.
    </p>

    <x-button class="mt-5" href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
</x-layout>
