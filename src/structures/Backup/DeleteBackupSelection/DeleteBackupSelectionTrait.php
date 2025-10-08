<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupSelection;

trait DeleteBackupSelectionTrait
{
    /**
     * @param DeleteBackupSelectionRequest $args
     * @return void
     */
    public function deleteBackupSelection(DeleteBackupSelectionRequest $args)
    {
        parent::deleteBackupSelection($args->toArray());
    }
}
