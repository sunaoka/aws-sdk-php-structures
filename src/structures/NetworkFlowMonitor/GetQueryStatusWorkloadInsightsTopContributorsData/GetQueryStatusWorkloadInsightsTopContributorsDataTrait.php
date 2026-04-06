<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryStatusWorkloadInsightsTopContributorsData;

trait GetQueryStatusWorkloadInsightsTopContributorsDataTrait
{
    /**
     * @param GetQueryStatusWorkloadInsightsTopContributorsDataRequest $args
     * @return GetQueryStatusWorkloadInsightsTopContributorsDataResponse
     */
    public function getQueryStatusWorkloadInsightsTopContributorsData(GetQueryStatusWorkloadInsightsTopContributorsDataRequest $args)
    {
        $result = parent::getQueryStatusWorkloadInsightsTopContributorsData($args->toArray());
        return new GetQueryStatusWorkloadInsightsTopContributorsDataResponse($result->toArray());
    }
}
