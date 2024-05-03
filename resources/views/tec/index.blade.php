<table>

<thead>
<th>Id tecnologia</th>
<th>Nome</th>
<th>Preço</th>
<th>Manu</th>


</thead>
<tbody>

@foreach($tecs as $tec)
<tr>


<th>{{ $tec->id}}</th>
<th>{{ $tec->name}}</th>
<th>{{ $tec->price}}</th>
<th>{{ $tec->Manu->name}}</th>
</tr>

@endforeach

</tbody>


</table>