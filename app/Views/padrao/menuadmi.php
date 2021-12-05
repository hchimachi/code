


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
				    <li><a href="<?=site_url("Administrativo/processo");?>">Processo</a></li>
				    <li><a href="<?=site_url("Administrativo/multa");?>">Multa</a></li>
				    <li><a href="<?=site_url("Administrativo/recurs");?>">Recursos</a></li>
				    <li><a href="<?=site_url("Administrativo/cad_enfor");?>">Entrada Forçada</a></li>
				    <li><a href="<?=site_url("Administrativo/prod_psf");?>">Produção PSF</a></li>
				    <li><a href="<?=site_url("Administrativo/cad_156");?>">Solicitações 156</a></li>
				    <li><a href="<?=site_url("Administrativo/oficios");?>">Ofícios</a></li>
                </ul>
            
            <li class="lista">Atividades</li>
                <ul class="menu"id="mnatividade">
                    <li><a href="<?=site_url("Atividades/ag_help");?>">Help</a></li>
					<li><a href="<?=site_url("Atividades/atendimentos");?>">Atendimentos</a></li>
					<li><a href="<?=site_url("Atividades/154");?>">Acompanhamentos</a></li>
					<li><a href="<?=site_url("Atividades/");?>">Verificar Entrada Forçada</a></li>
					<li><a href="<?=site_url("Atividades/");?>">Pontos Estratégicos</a></li>
					<li><a href="<?=site_url("Atividades/");?>">Imóveis Especiais</a></li>
					<li><a href="<?=site_url("Atividades/");?>">Obras</a></li>
                </ul>
            
            <li class="lista">Impressões</li>
                <ul class="menu"id="mnimpressao">
                    <li><a href="<?=site_url("#");?>">Notificação</a></li>
				    <li><a href="<?=site_url("#");?>">Autos</a></li>
				    <li><a href="<?=site_url("#");?>">Formar Processo</a></li>
				    <li><a href="<?=site_url("#");?>">Memorando</a></li>
				    <li><a href="<?=site_url("#");?>">Cancelar multa</a></li>
				    <li><a href="<?=site_url("#");?>">Recurso</a></li>
				    <li><a href="<?=site_url("#");?>">Solicitação de Entrada Forçada</a></li>
				    <li><a href="<?=site_url("#");?>">Solicitação de Publicações Diário Oficial</a></li>
				    <li><a href="<?=site_url("#");?>">Lista Notifica Imobiliarias</a></li>
				    <li><a href="<?=site_url("#");?>">GUIA</a></li>
				    <li><a href="<?=site_url("#");?>">Relatórios</a></li>
				    <li><a href="<?=site_url("#");?>">Relatórios (Sábados)</a></li>
				
                </ul>
			<li class="lista">Sair</li>
					<br><br>
            
       </ul>
       
</nav>
<section id="principal">
    <span onclick="abrirmenu()">&#9776;</span>
   
</section>
