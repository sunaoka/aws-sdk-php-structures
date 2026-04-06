<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StartQueryWorkloadInsightsTopContributors;

trait StartQueryWorkloadInsightsTopContributorsTrait
{
    /**
     * @param StartQueryWorkloadInsightsTopContributorsRequest $args
     * @return StartQueryWorkloadInsightsTopContributorsResponse
     */
    public function startQueryWorkloadInsightsTopContributors(StartQueryWorkloadInsightsTopContributorsRequest $args)
    {
        $result = parent::startQueryWorkloadInsightsTopContributors($args->toArray());
        return new StartQueryWorkloadInsightsTopContributorsResponse($result->toArray());
    }
}
