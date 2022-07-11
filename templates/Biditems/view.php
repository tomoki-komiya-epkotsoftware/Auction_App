<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Biditem $biditem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Biditem'), ['action' => 'edit', $biditem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Biditem'), ['action' => 'delete', $biditem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biditem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Biditems'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Biditem'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="biditems view content">
            <h3><?= h($biditem->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $biditem->has('user') ? $this->Html->link($biditem->user->id, ['controller' => 'Users', 'action' => 'view', $biditem->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($biditem->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($biditem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endtime') ?></th>
                    <td><?= h($biditem->endtime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($biditem->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Finished') ?></th>
                    <td><?= $biditem->finished ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Bidinfo') ?></h4>
                <?php if (!empty($biditem->bidinfo)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Biditem Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($biditem->bidinfo as $bidinfo) : ?>
                        <tr>
                            <td><?= h($bidinfo->id) ?></td>
                            <td><?= h($bidinfo->biditem_id) ?></td>
                            <td><?= h($bidinfo->user_id) ?></td>
                            <td><?= h($bidinfo->price) ?></td>
                            <td><?= h($bidinfo->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bidinfo', 'action' => 'view', $bidinfo->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bidinfo', 'action' => 'edit', $bidinfo->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bidinfo', 'action' => 'delete', $bidinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidinfo->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Bidrequest') ?></h4>
                <?php if (!empty($biditem->bidrequest)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Biditem Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($biditem->bidrequest as $bidrequest) : ?>
                        <tr>
                            <td><?= h($bidrequest->id) ?></td>
                            <td><?= h($bidrequest->biditem_id) ?></td>
                            <td><?= h($bidrequest->user_id) ?></td>
                            <td><?= h($bidrequest->price) ?></td>
                            <td><?= h($bidrequest->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bidrequest', 'action' => 'view', $bidrequest->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bidrequest', 'action' => 'edit', $bidrequest->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bidrequest', 'action' => 'delete', $bidrequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidrequest->id)]) ?>
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
