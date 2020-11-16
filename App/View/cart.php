<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/lightbox.css"/>
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Carrinho de Compras - Cart</title>
</head>
<body>

<div>

    <nav class="navbar navbar-expand-lg navbar-light barra" >
        <a class="navbar-brand" href="#"><img src="images/carrinho.png"></a>
        </div>
    </nav>
</div>

<div class="container jumbotron">
    <div class="row">

        <div class="col-md-12">
            <h1 class="text-center">Carrinho</h1>
        </div>
        <div class="col-md-7">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th></th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><a href="<?= $product->getImg(); ?>" data-lightbox="<?= $product->getImg(); ?>" ><img
                                        src="<?= $product->getImg(); ?>" width="100" height="100"></a></td>
                        <td><?= $product->getName(); ?></td>
                        <td><?= number_format($product->getPrice(), '2', ',', '.'); ?></td>
                        <td>
                            <form action="index.php?page=cart&action=add" method="post">
                                <input name="id" type="hidden" value="<?= $product->getId(); ?>">
                                <button type="submit" onclick="adicionado()"  class="btn btn-primary">Adicionar ao carrinho</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!--  --------------- -->
        <div class="col-md-5">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="3"></td>
                    <td><b>R$<?= number_format($cartTotal, 2, ',', '.') ?></b></td>
                    <td></td>

                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($cartItems as $item): ?>
                    <tr>
                        <td><?= $item->getProduct()->getName(); ?></td>
                        <td>
                            <form action="index.php?page=cart&action=update" method="post">
                                <input name="id" type="hidden" value="<?= $item->getProduct()->getId(); ?>">
                                <input size="2" type="text" name="quantity" value="<?= $item->getQuantity(); ?>">
                                <button type="submit" onclick="alterado()" class="btn btn-primary btn-xs">Alterar</button>
                            </form>
                        </td>
                        <td>R$<?= number_format($item->getSubtotal(), '2', ',', '.'); ?></td>
                        <td>

                            <a href="index.php?page=cart&action=delete&id=<?= $item->getProduct()->getId(); ?>"
                               class="btn btn-danger" onclick="deletar()">
                                Excluir
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/formulario/script.js"></script>
<script src="js/lightbox.js"></script>
</body>
</html>