<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbBackups;

trait ListDbBackupsTrait
{
    /**
     * @param ListDbBackupsRequest $args
     * @return ListDbBackupsResponse
     */
    public function listDbBackups(ListDbBackupsRequest $args)
    {
        $result = parent::listDbBackups($args->toArray());
        return new ListDbBackupsResponse($result->toArray());
    }
}
