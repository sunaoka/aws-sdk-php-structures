<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StopQueryWorkloadInsightsTopContributorsData;

trait StopQueryWorkloadInsightsTopContributorsDataTrait
{
    /**
     * @param StopQueryWorkloadInsightsTopContributorsDataRequest $args
     * @return StopQueryWorkloadInsightsTopContributorsDataResponse
     */
    public function stopQueryWorkloadInsightsTopContributorsData(StopQueryWorkloadInsightsTopContributorsDataRequest $args)
    {
        $result = parent::stopQueryWorkloadInsightsTopContributorsData($args->toArray());
        return new StopQueryWorkloadInsightsTopContributorsDataResponse($result->toArray());
    }
}
