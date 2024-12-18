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

            <section class="space-y-4">
            
            <!-- LIVROS -->

            <div class="w-1/3 p-2 rounded border-stone-800 border-2 bg-stone-900">

                <div class="flex">

                    <div class="w-1/3">Imagem</div>

                    <div>

                        <div class="font-semibold">Titulo</div>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliacoes)</div>    

                    </div>

                </div>

                <div class="text-sm">
                 Descricao
                </div>

            </div>

            </section>
        </main>
</body>

</html>