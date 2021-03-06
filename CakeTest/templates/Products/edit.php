<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<h3><?= __('Editing Product') ?></h3>

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-body">
                <?= $this->Form->create($product) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('name',['style'=>'display:block']);
                    echo $this->Form->control('sale_price',['style'=>'display:block']);
                    echo $this->Form->control('country_of_origin',['style'=>'display:block']);
                    echo $this->Form->control('category_id', ['style'=>'display:block','options' => $categories]);
                    ?>
                </fieldset>
                <div>
                    <?= $this->Html->link(__('<i class="fas fa-ban"></i> Cancel'), ['action' => 'index'], ['class' => 'd-none d-sm-inline-block btn btn-sm btn-danger shadow-sm float-right','escapeTitle'=>false]) ?>
                    <?= $this->Form->button('<span class="icon text-white"><i class="fas fa-save"></i> Save</span>', ['style'=>'margin-right:10px','class' => 'd-none d-sm-inline-block btn btn-sm btn-success shadow-sm float-right','escapeTitle'=>false]);?>
                    <?= $this->Form->end() ?>
                </div>
            </div>

        </div>
    </div>

</div>
