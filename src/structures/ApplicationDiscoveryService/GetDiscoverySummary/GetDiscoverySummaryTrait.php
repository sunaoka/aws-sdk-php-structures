<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\GetDiscoverySummary;

trait GetDiscoverySummaryTrait
{
    /**
     * @param GetDiscoverySummaryRequest $args
     * @return GetDiscoverySummaryResponse
     */
    public function getDiscoverySummary(GetDiscoverySummaryRequest $args)
    {
        $result = parent::getDiscoverySummary($args->toArray());
        return new GetDiscoverySummaryResponse($result->toArray());
    }
}
