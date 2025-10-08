<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsWorkloadInsightsTopContributors;

trait GetQueryResultsWorkloadInsightsTopContributorsTrait
{
    /**
     * @param GetQueryResultsWorkloadInsightsTopContributorsRequest $args
     * @return GetQueryResultsWorkloadInsightsTopContributorsResponse
     */
    public function getQueryResultsWorkloadInsightsTopContributors(
        GetQueryResultsWorkloadInsightsTopContributorsRequest $args,
    ) {
        $result = parent::getQueryResultsWorkloadInsightsTopContributors($args->toArray());
        return new GetQueryResultsWorkloadInsightsTopContributorsResponse($result->toArray());
    }
}
