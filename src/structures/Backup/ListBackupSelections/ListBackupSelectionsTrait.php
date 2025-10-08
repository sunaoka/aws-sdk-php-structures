<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupSelections;

trait ListBackupSelectionsTrait
{
    /**
     * @param ListBackupSelectionsRequest $args
     * @return ListBackupSelectionsResponse
     */
    public function listBackupSelections(ListBackupSelectionsRequest $args)
    {
        $result = parent::listBackupSelections($args->toArray());
        return new ListBackupSelectionsResponse($result->toArray());
    }
}
