<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobSummaries;

trait ListRestoreJobSummariesTrait
{
    /**
     * @param ListRestoreJobSummariesRequest $args
     * @return ListRestoreJobSummariesResponse
     */
    public function listRestoreJobSummaries(ListRestoreJobSummariesRequest $args)
    {
        $result = parent::listRestoreJobSummaries($args->toArray());
        return new ListRestoreJobSummariesResponse($result->toArray());
    }
}
