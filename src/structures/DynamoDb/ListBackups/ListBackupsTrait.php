<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListBackups;

trait ListBackupsTrait
{
    /**
     * @param ListBackupsRequest $args
     * @return ListBackupsResponse
     */
    public function listBackups(ListBackupsRequest $args)
    {
        $result = parent::listBackups($args->toArray());
        return new ListBackupsResponse($result->toArray());
    }
}
