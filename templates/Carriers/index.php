<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrier[]|\Cake\Collection\CollectionInterface $carriers
 */
?>
<div class="carriers index content">
    <?= $this->Html->link(__('New Carrier'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carriers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('carrier_code') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carriers as $carrier): ?>
                <tr>
                    <td><?= $this->Number->format($carrier->id) ?></td>
                    <td><?= h($carrier->name) ?></td>
                    <td><?= h($carrier->carrier_code) ?></td>
                    <td><?= $this->Number->format($carrier->created) ?></td>
                    <td><?= $this->Number->format($carrier->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carrier->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carrier->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carrier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
