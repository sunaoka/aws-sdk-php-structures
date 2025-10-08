<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryStatusWorkloadInsightsTopContributors;

trait GetQueryStatusWorkloadInsightsTopContributorsTrait
{
    /**
     * @param GetQueryStatusWorkloadInsightsTopContributorsRequest $args
     * @return GetQueryStatusWorkloadInsightsTopContributorsResponse
     */
    public function getQueryStatusWorkloadInsightsTopContributors(
        GetQueryStatusWorkloadInsightsTopContributorsRequest $args,
    ) {
        $result = parent::getQueryStatusWorkloadInsightsTopContributors($args->toArray());
        return new GetQueryStatusWorkloadInsightsTopContributorsResponse($result->toArray());
    }
}
