<?php 

$livros = [
    ['id' => 1, 'titulo' => 'A Vida Invisivel de ADDIE LARUE', 'autor' => 'V.E. SCHWAB', 'descricao' => 'A Menina que fez um pacto com a escuridao e foi esquecida por todos'],
    ['id' => 2, 'titulo' => 'Harry Potter', 'autor' => 'J.K Rowling', 'descricao' => 'O Garoto que foi admitido na escola para bruxos Hogwarts'],
    ['id' => 3, 'titulo' => 'A Menina que Roubava Livros', 'autor' => 'Markus Zusak', 'descricao' => 'A Garota que encontrou a morte 3 vezes e sobreviveu todas'],
    ['id' => 4, 'titulo' => 'Crepusculo', 'autor' => 'Stephenie Meyer', 'descricao' => 'O Vampiro que Brilha no Sol'],
    ['id' => 5, 'titulo' => 'Para Todos os Garotos Que Ja Amei', 'autor' => 'Jenny Han', 'descricao' => 'A Garota que Ama ate o Cara do Gas'],
    ['id' => 6, 'titulo' => 'Mr. Robot: Red Wheelbarrow', 'autor' => 'Sam Esmail', 'descricao' => 'O Mlk que Hackeou ate tua Mae'],
    ['id' => 7, 'titulo' => 'O Manual do Mundo', 'autor' => 'Ibere Tenorio', 'descricao' => 'O Manual de Como Hackear o Mundo'],
    ['id' => 8, 'titulo' => 'Enaldinho - O Livro', 'autor' => 'Enaldo', 'descricao' => 'Livro do YouTuber Enaldinho, Enaldo, Enaldo, Enaldo'],
    ['id' => 9, 'titulo' => 'Manual de Assassinato para Boas Garotas', 'autor' => 'Holly Jackson', 'descricao' => 'Como assassinar e continuar sendo boazinha e tirar boas notas']
];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Book Manager</title>
</head>
<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900">

            <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
                <div class="font-bold text-xl tracking-wide">BookManager V1</div>
                <ul class="flex space-x-8 font-bold">
                    <li><a href="/" class="text-orange-600">Explorar</a></li>
                    <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
                </ul>
                <ul>
                    <li><a href="/login.php">Fazer Login</a></li>
                </ul>
            </nav>

        </header>

        <main class="mx-auto max-w-screen-lg space-y-6">
            
            <form class="w-full flex space-x-2 mt-6">
                <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                placeholder="Pesquisar..." name="Pesquisar"/>
                <button type="submit">🔎</button>
            </form>

            <!-- Lista de Livros -->

            <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            
            <!-- LIVROS -->

            <?php foreach($livros as $livro): ?>

            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">

                <div class="flex">

                    <div class="w-1/3">Imagem</div>

                    <div class="space-y-1">

                        <a href="/livro.php?id=<?=$livro['id']?>" class="font-semibold hover:underline"><?=$livro['titulo']?></a>
                        <div class="text-xs italic"><?=$livro['autor']?></div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliacoes)</div>    

                    </div>

                </div>

                <div class="text-sm mt-2">
                <?=$livro['descricao']?>
                </div>

            </div>

            <?php endforeach; ?>

            </section>
        </main>
</body>

</html>