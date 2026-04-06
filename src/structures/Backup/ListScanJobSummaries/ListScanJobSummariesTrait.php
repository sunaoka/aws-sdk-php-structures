<?php

namespace Sunaoka\Aws\Structures\Backup\ListScanJobSummaries;

trait ListScanJobSummariesTrait
{
    /**
     * @param ListScanJobSummariesRequest $args
     * @return ListScanJobSummariesResponse
     */
    public function listScanJobSummaries(ListScanJobSummariesRequest $args)
    {
        $result = parent::listScanJobSummaries($args->toArray());
        return new ListScanJobSummariesResponse($result->toArray());
    }
}
