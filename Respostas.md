# Questionário: Sistema de Login com $_SESSION

## Parte 1: Objetivas
1-B, 2-C, 3-D, 4-D, 5-B, 6-B, 7-D, 8-B, 9-A, 10-A,
11-B, 12-C, 13-B, 14-B, 15-B, 16-C, 17-C, 18-C, 19-B, 20-D

## Parte 2: Discursivas

21. O $_COOKIE fica no navegador, onde o usuário pode ver e alterar os dados. No $_SESSION os dados ficam no servidor e o cliente guarda só um ID, por isso é mais seguro.

22. O $_REQUEST mistura GET, POST e COOKIE, então não se sabe a origem do dado. Isso abre brechas de segurança e deixa o código ambíguo. $_POST e $_GET deixam explícito o que se espera.

23. É dividir o sistema em partes com responsabilidades distintas. Aqui: login.html (apresentação), valida.php (lógica de autenticação), painel.php (área protegida), logout.php (encerra a sessão) e css/estilo.css (estilo).

24. Ambos exibem texto. O echo não retorna valor e aceita vários parâmetros. O print retorna sempre 1 e aceita só um argumento.

25. Para organização e manutenção: separa o estilo da lógica e do HTML e permite reutilizar o CSS em várias páginas.

26. Usando um array associativo com os usuários:
$usuarios = ['admin' => '1234', 'usuario' => 'abcd'];
if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) { ... }

27. Redireciona o navegador para outra página. Após o login válido leva ao painel.php; se falhar, volta ao login.html; no logout, volta ao login. Controla o fluxo de navegação.

28. Porque o PHP só carrega o $_SESSION depois de session_start(). Sem ele, a página não enxerga os dados da sessão.

29. (1) Uso de htmlspecialchars() para evitar XSS. (2) Verificação de $_SESSION['logado'] para bloquear acesso direto ao painel.

30. Guardar as senhas com hash (password_hash / password_verify) em um banco de dados, com níveis de acesso (admin e usuário comum).
