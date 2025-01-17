<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        
    <article class="py-8 max-w-screen-lg border-b border-gray-500">
        <a href="/blog/{{ $post['slug'] }}" class="hover:underline">    
            <h2 class="mb-3 text-3xl font-bold text-gray-700">{{ $post['title'] }}</h2>
        </a>
        <div class="text-sm text-gray-600">
            <a href="#">{{ $post['author'] }}</a> | {{ $post['date'] }}
        </div>
        <p class="my-4 font-light">
            {{ Str::limit($post['body'], 125) }}
        </p>
        <a href="/blog/{{ $post['slug'] }}" class="font-medium hover:underline">Read more &raquo;</a>
    </article>

    @endforeach

    
    {{-- <article>
        <h1 style="font-size: 24pt; font-weight: bold; text-decoration: underline">TITLE1</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error expedita recusandae numquam obcaecati atque ullam impedit illum, accusantium aliquid aliquam laborum, beatae veniam accusamus consequatur neque dolores, pariatur ipsam eveniet.
        </p>

        <br>

        <h1 style="font-size: 24pt; font-weight: bold; text-decoration: underline">TITLE2</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error expedita recusandae numquam obcaecati atque ullam impedit illum, accusantium aliquid aliquam laborum, beatae veniam accusamus consequatur neque dolores, pariatur ipsam eveniet.
        </p>
    </article> --}}
</x-layout>