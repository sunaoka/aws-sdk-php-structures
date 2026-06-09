<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseBackups;

trait ListAutonomousDatabaseBackupsTrait
{
    /**
     * @param ListAutonomousDatabaseBackupsRequest $args
     * @return ListAutonomousDatabaseBackupsResponse
     */
    public function listAutonomousDatabaseBackups(ListAutonomousDatabaseBackupsRequest $args)
    {
        $result = parent::listAutonomousDatabaseBackups($args->toArray());
        return new ListAutonomousDatabaseBackupsResponse($result->toArray());
    }
}
