<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupSelection;

trait GetBackupSelectionTrait
{
    /**
     * @param GetBackupSelectionRequest $args
     * @return GetBackupSelectionResponse
     */
    public function getBackupSelection(GetBackupSelectionRequest $args)
    {
        $result = parent::getBackupSelection($args->toArray());
        return new GetBackupSelectionResponse($result->toArray());
    }
}
