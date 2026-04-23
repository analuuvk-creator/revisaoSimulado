<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='update'>
        <div class="col-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" wire:model='nome' id="nome">
        </div>
        <div class="col-12">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" wire:model='valor' id="valor">
        </div>
        <div class="col-md-12">
            <label for="qnt_estoque" class="form-label">Qtd. Estoque</label>
            <input type="text" class="form-control" wire:model='qtd_estoque' id="qtd_estoque">
        </div>
        <div class="col-md-12">
            <label for="qtd_minima" class="form-label">Qtd. Mínima</label>
            <input type="text" class="form-control" wire:model='qtd_minima' id="qtd_minima">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>