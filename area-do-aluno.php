
<?php include "header.php" ?>
  
  
  
    <!-- =============================-->
	
	
	
	
<section>

<div class="row">
	<div class="col-sm-5">
       <div class="well well-sm success">Esta na p&aacute;gina   <a href="#">&Aacute;rea do Aluno</a></div>
     </div>
	
	 <div class="col-sm-7"> </div>
	
 
  </div>
  
 <br />  
  <br />

<div class="row">
			
			<div class="col-md-2"> </div>

<div class="col-md-9"> 

<form class="form-inline" role="form">
<div class="form-group">
<label for="escola">Escolha a tua escola</label>:<input class="checkbox disabled"  type="radio"  name="xx" disabled value="ESXX"/> <br/>
<input class="radio-inline checkbox" type="radio" name="xx" value="ESXX"/> Secundaria de Xai-Xai 
<input class="radio-inline checkbox" type="radio" name="xx" value="ESJC"/> Secundaria Joaquim Chissano 



</div><p></p><br/>

    <div class="form-group">
      <label for="usr">Classe:</label>
      <input type="number" class="form-control formaluno" min="11" max="12" id="usr" name="classe" placeholder="Ex: 11">
    </div>
    <div class="form-group">
      <label for="turma">Turma:</label>
      <input type="text" class="form-control formaluno" id="turma" name="turma" placeholder="A02">
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control formaluno" id="senha" name="senha" placeholder="*********">
    </div>
    <div class="checkbox">
      <label><input type="checkbox">gravar sess&atilde;o</label>
    </div>
    <button type="submit" class="btn btn-info">Entrar</button>
  </form>

</div>

			<div class="col-md-1"> </div>
  
</div>



<!----------------------=====================================================-------------------------->

 <br />
 <br />
 <br />


 <div class="row">
 <div class="col-md-1"></div>
   


<div class="col-md-10">
 <h3 class="aluno-info bg-warning">
 <center class="text-uppercase text-danger"><strong>Sala temporiamente inacess&iacute;vel</strong></center><br/>
   Caro aluno! Esta &eacute; uma sala feita para ti. Poder&aacute;s futuramente acessar 
   esta p&aacute;gina com combina&ccedil;&atilde;o da tua escola, classe, turma e senha que receber&aacute; da direc&ccedil;&atilde;o da 
   escola. Com ela activa poder&aacute;s ver tuas notas, apartir das avalia&ccedil;&otilde;es e m&eacute;dias no fim de cada trimestre.
 </h3>
</div>



<div class="col-md-1"></div>
 </div>
   
  
 <br/>
  

   </section>
   
   
  <!-- =============================-->
  
   <!-- ====================================================-->
 

 <div class="row foot">
 <footer class="container-default">
 <div class="row rodap">
 

   <div class="col-sm-12 copyright">
	 &copy;Todos os direitos reservados - GAZA <span id="data"> </span><br/>
       <span style="color: red">Desenvolvido por PJP Gaza</span>

	 <script>
	 var data = new Date();
	 document.getElementById("data").innerHTML = data.getFullYear();
	  </script> 
	  </div>

 
 
 </div>
  
  </footer>
</div>
</body>
</html>