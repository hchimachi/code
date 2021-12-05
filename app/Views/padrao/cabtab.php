<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="$titulo  | ". SITE  ?></title>
    <link rel="stylesheet" href="<?=base_url('bea/outros/datatables.min.css')?>">
   
   <script type="text/javascript" src="<?=base_url('bea/outros/datatables.min.js')?>"></script>
   
    <link rel="stylesheet" href="<?=base_url('bea/css/estilo.css')?>">
</head>
   
    <script>
    $(document).ready(function() {
    $('#tabela').DataTable(  
        {   
            
            "order":[],
           
            
            "language": 
            {
                "lengthMenu": "Mostrar _MENU_ Linhas por página",
                "zeroRecords": "Nenhum registro encontrado - faça outra busca",
                "info": "Página _PAGE_ de _PAGES_",
                "loadingRecords": "Loading...",
                "search":         "Procurar:",
                "paginate": {
                    "first":      "Primeira",
                    "last":       "Última",
                    "next":       "Próxima",
                    "previous":   "Anterior"
                },
            
                "infoEmpty": "Banco de dados vazio",
                "infoFiltered": "(total sem filtro _MAX_ registros)"
            },
            
            dom: '<"clear">Bfprt'
           
            
        } 
        
    );
   
} );
</script>

</head>
<body>
<?= "<p class=titulo>Usuário " .$_SESSION['usuario']. " logado";?> <a href="<?=site_url('/administrativo')?>">Voltar</a> </p>
<div class="clear" >
  
<?=$this->renderSection('Conteudo')?>


<nav id="menuOculto">
    <p class="btnfechar"onclick="fecharmenu()">&times;</p>
       <ul class="menu-principal">
            <li class="lista">Cadastros</li>
                <ul class="menu" id="mncadastro">
                    <li><a href="<?=site_url("Adm_bairro/Cad_Bairros");?>">Bairro</a></li>
				    <li><a href="#">Destinatários</a></li>
				    <li><a href="<?=site_url("Adm_Imobiliaria/Cad_Imobiliaria");?>">Imobiliarias</a></li>
				    <li><a href="<?=site_url("Adm_Imoveis/Cad_IE");?>">Imóveis Especiais</a></li>
				    <li><a href="<?=site_url("Adm_Imoveis/Cad_PE");?>">Pontos Estratégicos</a></li>
					<li><a href="<?=site_url("Adm_Imoveis/Cad_Obras");?>">Obras</a></li>
					<li><a href="<?=site_url("Adm_inter/Cad_Infracao");?>">Infração</a></li>
				    <li><a href="<?=site_url("Adm_inter/Origem_not");?>">Origem da Notificação</a></li>
				    <li><a href="<?=site_url("Adm_inter/Cad_PSF");?>">PSF</a></li>
				    <li><a href="<?=site_url("Adm_inter/Cad_Usuário");?>">Usuário</a></li>
                </ul>
            
            <li class="lista">Administrativo</li>
                <ul class="menu"id="mnadministrativo">
                    <li><a href="<?=site_url("Administrativo/notificacao");?>">Notificação</a></li>
				    <li><a href="<?=site_url("Administrativo/auto_infracao");?>">Auto de Infração</a></li>
				    <li><a href="<?=site_url("Administrativo/notifica_imob");?>">Notifica Imobiliarias</a></li>
				    <li><a href="<?=site_url("Administrativo/processo");?>">Processo</a></li>
				    <li><a href="<?=site_url("Administrativo/multa");?>">Multa</a></li>
				    <li><a href="<?=site_url("Administrativo/recurso");?>">Recursos</a></li>
				    <li><a href="<?=site_url("Administrativo/Can_multa");?>">Cancela Multa</a></li>
				    <li><a href="<?=site_url("Administrativo/cad_enfor");?>">Entrada Forçada</a></li>
				    <li><a href="<?=site_url("Administrativo/prod_psf");?>">Produção PSF</a></li>
				    <li><a href="<?=site_url("Administrativo/cad_156");?>">Solicitações 156</a></li>
				    <li><a href="<?=site_url("Administrativo/oficios");?>">Ofícios</a></li>
                </ul>
            
            <li class="lista">Atividades</li>
                <ul class="menu"id="mnatividade">
                    <li><a href="<?=site_url("Atividades/ag_help");?>">Help</a></li>
					<li><a href="<?=site_url("Atividades/atendimentos");?>">Atendimentos</a></li>
					<li><a href="<?=site_url("Atividades/Acompanhamento");?>">Acompanhamentos</a></li>
					<li><a href="<?=site_url("Atividades/ver_enfor");?>">Verificar Entrada Forçada</a></li>
					<li><a href="<?=site_url("Atividades/Visita_PE");?>">Pontos Estratégicos</a></li>
					<li><a href="<?=site_url("Atividades/Visita_IE");?>">Imóveis Especiais</a></li>
					<li><a href="<?=site_url("Atividades/Visita_Obras");?>">Obras</a></li>
                </ul>
            
            <li class="lista">Impressões</li>
                <ul class="menu"id="mnimpressao">
                    <li><a href="<?=site_url("imprimir/cartas");?>">Correspondencias</a></li>
				    <li><a href="<?=site_url("imprimir/Processo");?>">Formar Processo</a></li>
				    <li><a href="<?=site_url("imprimir/Multa");?>">Memorando</a></li>
				    
				    <li><a href="<?=site_url("imprimir/guia");?>">GUIA</a></li>
				    <li><a href="<?=site_url("Relatorios");?>">Relatórios</a></li>
				    
				
                </ul>
               
			 <li class="lista">Publicações</li>
                <ul class="menu" id="mncadastro">
                    <li><a href="#">Autos/Notificações</a></li>
				    <li><a href="#">Agendamento de Entradas Forçadas</a></li>
				   
				   
                </ul>
            
					<br><br>
            
       </ul>
       
</nav>
<section id="principal">
    <span onclick="abrirmenu()">&#9776;</span>
   
</section>

</div>
<footer class="fixar-rodape">
   
          <p class="rdpp"><?= SITE;?> - Todos os Direitos Reservados</p>
    </footer>
    
    <script src="<?=base_url('bea/css/App.js')?>"></script>
</body>
</html>