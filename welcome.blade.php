{{-- <h1>Our First Page</h1> --}}
{{-- <a href="/post{id}">Our Anchor Post Page</a> --}}

<h1>Home First Page</h1>
{{-- <a href="/about">About</a> --}}
{{-- <a href="{{route('mypost')}}">Post</a> --}}

{{6+7}}

<br><br>

{{"Hello World"}}

<br><br>

{!!"<h1>Heading1</h1>"!!}

{{-- when you assign php variable in larval follow this syntax --}}

@php
    $user='This is the patern of laraval to show output on screen'
@endphp

{{$user}}


{{-- initilize of array in laraval --}}

@php
    $name=['ali','ahmad','abdurahman',146556,'Razzaq','Ishtaiq']
@endphp
<ul>
@foreach ($name as $n)
   <li> {{$n}} </li>
@endforeach
</ul>

    {{-- we can use differnt loop vaiables in laraval --}}

    {{"Index Ouput of this "}}
<ul>
    @foreach ($name as $n)
       <li>{{$loop->index}} - {{$n}} </li>
    @endforeach
 </ul>


 {{"No of values count in array "}}
 <ul>
     @foreach ($name as $n)
        <li>{{$loop->count}} - {{$n}} </li>
     @endforeach
  </ul>


  {{"using if statement in array "}}
  <ul>
      @foreach ($name as $n)
      
      @if ($loop->first)
      <li style="color: red;"> - {{$n}} </li>
      @elseif ($loop->last)
      <li style="color: green;">- {{$n}} </li>
     

      @else
        
        <li>  {{$n}}  </li>
        @endif
      
     
      @endforeach
   </ul>
 


             {{-- odd even no use in laraval --}}

             {{"even or odd use in thi array"}}

   <ul>
    @foreach ($name as $n)
    
    @if ($loop->even)
    <li style="color: red;"> - {{$n}} </li>
   
    @elseif ($loop->odd)
    <li style="color: green;">- {{$n}} </li>
   
      @endif
    
   
    @endforeach
 </ul>
