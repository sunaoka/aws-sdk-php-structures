<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupJobSummaries;

trait ListBackupJobSummariesTrait
{
    /**
     * @param ListBackupJobSummariesRequest $args
     * @return ListBackupJobSummariesResponse
     */
    public function listBackupJobSummaries(ListBackupJobSummariesRequest $args)
    {
        $result = parent::listBackupJobSummaries($args->toArray());
        return new ListBackupJobSummariesResponse($result->toArray());
    }
}
