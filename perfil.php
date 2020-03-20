<html>
<head>
    <title> Meu perfil </title>
    
    <style>
    img {height: 100px;
     largura: 100px;
     display: bloco;
    }

    </style>

</head>
<body>
    <? php

    $ vet = array (
      'img' => 'https://image.freepik.com/vetores-gratis/icone-de-perfil-de-pessoas_24877-40756.jpg',
      'nome' => 'Fabricio', 
      'apelido' => 'nenhum',
      'email' => 'fabricioguimaraes56@gmail.com',
      'endereco' => 'faz.jureminha',
      'cidade' => 'Caculé',
      'curso' => 'informática para Internet',
      'disciplina' => 'Programação do Sistema Web',
      'ano' => '2020',
    );

    echo ('<img src ='. $ vet ['img']. '> <br> <br>');
	echo ('Nome:'. $ vet ['nome']. '<br> Apelido:'. $ vet ['apelido']. '<br> E-mail:'. $ vet ['email']. ' <br> Endereço: '. $ vet [' endereco '].' <br> Cidade: '. $ vet [' cidade '].' <br> Curso: '. $ vet [' curso '].' <br > Disciplina: '. $ Vet [' disciplina '].' <br> Ano: '. $ Vet [' ano ']);

    ?>

</body>

</html>
