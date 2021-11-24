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
            <?= $this->Html->link(__('Edit Carrier'), ['action' => 'edit', $carrier->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carrier'), ['action' => 'delete', $carrier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carriers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carrier'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carriers view content">
            <h3><?= h($carrier->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($carrier->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carrier Code') ?></th>
                    <td><?= h($carrier->carrier_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carrier->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= $this->Number->format($carrier->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= $this->Number->format($carrier->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Patients') ?></h4>
                <?php if (!empty($carrier->patients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Carrier Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Street Address') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Zipcode') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($carrier->patients as $patients) : ?>
                        <tr>
                            <td><?= h($patients->id) ?></td>
                            <td><?= h($patients->carrier_id) ?></td>
                            <td><?= h($patients->name) ?></td>
                            <td><?= h($patients->street_address) ?></td>
                            <td><?= h($patients->city) ?></td>
                            <td><?= h($patients->state) ?></td>
                            <td><?= h($patients->zipcode) ?></td>
                            <td><?= h($patients->email) ?></td>
                            <td><?= h($patients->phone) ?></td>
                            <td><?= h($patients->created) ?></td>
                            <td><?= h($patients->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Patients', 'action' => 'view', $patients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Patients', 'action' => 'edit', $patients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Patients', 'action' => 'delete', $patients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patients->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
