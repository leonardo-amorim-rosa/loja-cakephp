<?php 
	echo $this->Form->create($produto, ['action' => 'salvar']);
	echo $this->Form->input("nome");
	echo $this->Form->input("preco");
	echo $this->Form->input("quantidade");
	echo $this->Form->button("Salvar");
	echo $this->Form->end();
?>