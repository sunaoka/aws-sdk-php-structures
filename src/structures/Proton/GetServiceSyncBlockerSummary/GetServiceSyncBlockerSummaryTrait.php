<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceSyncBlockerSummary;

trait GetServiceSyncBlockerSummaryTrait
{
    /**
     * @param GetServiceSyncBlockerSummaryRequest $args
     * @return GetServiceSyncBlockerSummaryResponse
     */
    public function getServiceSyncBlockerSummary(GetServiceSyncBlockerSummaryRequest $args)
    {
        $result = parent::getServiceSyncBlockerSummary($args->toArray());
        return new GetServiceSyncBlockerSummaryResponse($result->toArray());
    }
}
