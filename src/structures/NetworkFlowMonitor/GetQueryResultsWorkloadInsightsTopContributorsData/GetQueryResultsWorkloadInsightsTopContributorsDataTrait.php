<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsWorkloadInsightsTopContributorsData;

trait GetQueryResultsWorkloadInsightsTopContributorsDataTrait
{
    /**
     * @param GetQueryResultsWorkloadInsightsTopContributorsDataRequest $args
     * @return GetQueryResultsWorkloadInsightsTopContributorsDataResponse
     */
    public function getQueryResultsWorkloadInsightsTopContributorsData(GetQueryResultsWorkloadInsightsTopContributorsDataRequest $args)
    {
        $result = parent::getQueryResultsWorkloadInsightsTopContributorsData($args->toArray());
        return new GetQueryResultsWorkloadInsightsTopContributorsDataResponse($result->toArray());
    }
}
