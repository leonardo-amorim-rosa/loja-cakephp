<table class="table" style="width:100%; margin-top:1%">
	<thead>
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Preço</td>
			<td>Quantidade</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($produtos as $produto): ?>
		<tr>
			<td><?=$produto["id"]?></td>
			<td><?=$produto["nome"]?></td>
			<td><?=$produto["preco"]?></td>
			<td><?=$produto["quantidade"]?></td>
		</tr>
	<?php endforeach ?>	
	</tbody>
</table>
<?php echo $this->Html->link('Novo produto', ['controller' => 'produtos', 'action' => 'novo']) ?>