<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobBackups;

trait ListSearchJobBackupsTrait
{
    /**
     * @param ListSearchJobBackupsRequest $args
     * @return ListSearchJobBackupsResponse
     */
    public function listSearchJobBackups(ListSearchJobBackupsRequest $args)
    {
        $result = parent::listSearchJobBackups($args->toArray());
        return new ListSearchJobBackupsResponse($result->toArray());
    }
}
