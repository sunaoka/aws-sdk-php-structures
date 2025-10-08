<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors;

trait GetQueryResultsMonitorTopContributorsTrait
{
    /**
     * @param GetQueryResultsMonitorTopContributorsRequest $args
     * @return GetQueryResultsMonitorTopContributorsResponse
     */
    public function getQueryResultsMonitorTopContributors(GetQueryResultsMonitorTopContributorsRequest $args)
    {
        $result = parent::getQueryResultsMonitorTopContributors($args->toArray());
        return new GetQueryResultsMonitorTopContributorsResponse($result->toArray());
    }
}
