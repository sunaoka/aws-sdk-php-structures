<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StopQueryWorkloadInsightsTopContributors;

trait StopQueryWorkloadInsightsTopContributorsTrait
{
    /**
     * @param StopQueryWorkloadInsightsTopContributorsRequest $args
     * @return StopQueryWorkloadInsightsTopContributorsResponse
     */
    public function stopQueryWorkloadInsightsTopContributors(StopQueryWorkloadInsightsTopContributorsRequest $args)
    {
        $result = parent::stopQueryWorkloadInsightsTopContributors($args->toArray());
        return new StopQueryWorkloadInsightsTopContributorsResponse($result->toArray());
    }
}
