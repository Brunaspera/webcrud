<?php
// ********** read ***********
session_start();
$sql = "SELECT * FROM pessoa ";
$resultado = mysqli_query($connect, $sql);

// Executa laço para ler todosos registros da tabela selecionada
while ($dados = mysqli_fetch_array($resultado)) {

?>
    <tbody>
        <!-- Preenche a tabela com os dados do registro -->
        <tr>
            <td><?php echo $dados['cpf']; ?></td>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['sobrenome'] ?></td>
            <td><?php echo $dados['email'] ?></td>
            <td><?php echo $dados['sexo'] ?></td>
            <td><?php echo $dados['telefone'] ?></td>

            <!-- Botão editar -->
            <td><a class="btn btn-secondary btn-sm" href="main/editar.php?id=<?php echo $dados['id']?>" role="button" style="margin:2%;">Editar</a>
            
            <!-- Botão apagar -->
            <a class="btn btn-secondary btn-sm btn-danger" role="button" href="main/apagar.php?id=<?php echo $dados['id'];?>" style="margin:2%;">Apagar</a></td>
        </tr>
    </tbody>
<?php } ?>