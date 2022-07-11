<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bidmessage $bidmessage
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bidmessage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bidmessage->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bidmessage'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bidmessage form content">
            <?= $this->Form->create($bidmessage) ?>
            <fieldset>
                <legend><?= __('Edit Bidmessage') ?></legend>
                <?php
                    echo $this->Form->control('bidinfo_id');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('message');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
