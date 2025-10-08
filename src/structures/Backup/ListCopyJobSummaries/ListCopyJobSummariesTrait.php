<?php

namespace Sunaoka\Aws\Structures\Backup\ListCopyJobSummaries;

trait ListCopyJobSummariesTrait
{
    /**
     * @param ListCopyJobSummariesRequest $args
     * @return ListCopyJobSummariesResponse
     */
    public function listCopyJobSummaries(ListCopyJobSummariesRequest $args)
    {
        $result = parent::listCopyJobSummaries($args->toArray());
        return new ListCopyJobSummariesResponse($result->toArray());
    }
}
