<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupSelection;

trait CreateBackupSelectionTrait
{
    /**
     * @param CreateBackupSelectionRequest $args
     * @return CreateBackupSelectionResponse
     */
    public function createBackupSelection(CreateBackupSelectionRequest $args)
    {
        $result = parent::createBackupSelection($args->toArray());
        return new CreateBackupSelectionResponse($result->toArray());
    }
}
