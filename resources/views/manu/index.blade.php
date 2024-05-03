<table>

<thead>
<th>Id tecnologia</th>
<th>Nome</th>
<th>tecs</th>


</thead>
<tbody>

@foreach($manus as $manu)
<tr>


<th>{{ $manu->id}}</th>
<th>{{ $manu->name}}</th>
<th>{{ $manu->Tecs->count()}}</th>
</tr>

@endforeach

</tbody>


</table>