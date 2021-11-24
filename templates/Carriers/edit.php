<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrier $carrier
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carrier->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carriers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carriers form content">
            <?= $this->Form->create($carrier) ?>
            <fieldset>
                <legend><?= __('Edit Carrier') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('carrier_code');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
