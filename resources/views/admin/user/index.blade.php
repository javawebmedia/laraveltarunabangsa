<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>USERNAME</th>
			<th>LEVEL</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($user as $row) { ?>
		<tr>
			<td><?php echo $no ?></td>
			<td>{{ $row->nama }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->username }}</td>
			<td>{{ $row->akses_level }}</td>
			<td></td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>