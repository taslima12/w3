{{--<h2>Welcome {{$name}}! And You're {{$age}} years old!</h2>--}}

{{--@php
$a=6;
@endphp
@if($a==5)
It's five
@elseif($a==6)
It's six
@else 
not found
@endif
@for ($i=1; $i<=10; $i++)
{{$i}} <br>
@endfor

@switch($a)
@case(1)
It's one
@break
@case(2)
It's two
@break
@default
It's three
@endswitch
--}}
@foreach($students as $student)
{{$student['name']}} <br>
@endforeach
