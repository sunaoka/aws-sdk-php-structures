<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteRestoreTestingSelection;

trait DeleteRestoreTestingSelectionTrait
{
    /**
     * @param DeleteRestoreTestingSelectionRequest $args
     * @return void
     */
    public function deleteRestoreTestingSelection(DeleteRestoreTestingSelectionRequest $args)
    {
        parent::deleteRestoreTestingSelection($args->toArray());
    }
}
