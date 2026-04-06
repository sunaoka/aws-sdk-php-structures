<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StartQueryWorkloadInsightsTopContributorsData;

trait StartQueryWorkloadInsightsTopContributorsDataTrait
{
    /**
     * @param StartQueryWorkloadInsightsTopContributorsDataRequest $args
     * @return StartQueryWorkloadInsightsTopContributorsDataResponse
     */
    public function startQueryWorkloadInsightsTopContributorsData(StartQueryWorkloadInsightsTopContributorsDataRequest $args)
    {
        $result = parent::startQueryWorkloadInsightsTopContributorsData($args->toArray());
        return new StartQueryWorkloadInsightsTopContributorsDataResponse($result->toArray());
    }
}
