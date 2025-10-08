<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetSyncBlockerSummary;

trait GetSyncBlockerSummaryTrait
{
    /**
     * @param GetSyncBlockerSummaryRequest $args
     * @return GetSyncBlockerSummaryResponse
     */
    public function getSyncBlockerSummary(GetSyncBlockerSummaryRequest $args)
    {
        $result = parent::getSyncBlockerSummary($args->toArray());
        return new GetSyncBlockerSummaryResponse($result->toArray());
    }
}
