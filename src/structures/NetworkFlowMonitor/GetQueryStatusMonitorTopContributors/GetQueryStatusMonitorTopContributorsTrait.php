<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryStatusMonitorTopContributors;

trait GetQueryStatusMonitorTopContributorsTrait
{
    /**
     * @param GetQueryStatusMonitorTopContributorsRequest $args
     * @return GetQueryStatusMonitorTopContributorsResponse
     */
    public function getQueryStatusMonitorTopContributors(GetQueryStatusMonitorTopContributorsRequest $args)
    {
        $result = parent::getQueryStatusMonitorTopContributors($args->toArray());
        return new GetQueryStatusMonitorTopContributorsResponse($result->toArray());
    }
}
