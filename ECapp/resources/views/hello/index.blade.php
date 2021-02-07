<table>
<tr><th>Name</th>
    <th>Mail</th>
</tr>
@foreach($items as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
    </tr>
@endforeach
</table>