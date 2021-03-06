		<section id="wrap">
			<table id="home">
				<thead>
					<tr>
						<th>Créateur</th>
						<th>Dernier éditeur</th>
						<th>Nom</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($widgets as $k => $v): ?>
					<tr>
						<td><?php echo $v["creator_id"]["username"] ?></td>
						<td><?php echo $v["last_editor_id"]["username"] ?></td>
						<td><?php echo $v["title"] ?></td>
						<td>
							<a href="<?php echo TLINK ?>widgets/edit/<?php echo $v["id"] ?>"><img src="<?php echo ASSETS ?>images/edit.png" alt="Éditer" /></a>
							<a href="#" onclick="if(confirm('Êtes-vous sûr de vouloir supprimer le widget N°<?php echo $v["id"] ?> ?')) window.location.replace('<?php echo WEBROOT ?>actions/widgets/delete/<?php echo $v["id"] ?>/?token={session.token}')"><img src="<?php echo ASSETS ?>images/delete.png" alt="Supprimer" /></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<a class="btn btn-table" href="<?php echo TLINK ?>widgets/create">Créer un widget</a>
			<div class="pagination">
				<ul>
					<?php for($i = 1; $i < $count_pages; $i++): ?>
					<li><a href="<?php echo TLINK ?>widgets/home/<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php endfor; ?>
				</ul>
			</div>
		</section>