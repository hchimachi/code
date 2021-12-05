<?= $this->extend('padrao/site')?>
<?= $this->section('Conteudo')?>


<h1 id="beati"class="titulo">Bea-Piracicaba</h1>  
  
   <img id="pref" src="<?=base_url('bea/img/zoonose.png')?>">      
   <img id="zoo" src="<?=base_url('bea/img/zoonose2.png')?>">
  
<br><br>

<hr><br>
 
<div class="columns pagina">
        <div class="column is-3 centro">

<h3 class="sauda">BEM VINDO<br></h3>
<h3 class="sauda">INFORME SEU USUÁRIO E SENHA</h3>
<?php
helper('form');
echo form_open('/log');
?>
<input type="text" id="usuario" name="usuario" class="input is-rounded is-small" placeholder="Usuário" required>
    <input type="password" id="senha" name="senha" class="input is-rounded is-small" placeholder="Senha"required>
    <input type="submit" value="ENTRAR" class="button is-primary">
<?=form_close();
if(isset($_SESSION['tentativa']))
echo "Tentativa numero ".$_SESSION['tentativa']. " de 3 possíveis";
?>

   
</div> </div>
<?= $this->endsection()?>