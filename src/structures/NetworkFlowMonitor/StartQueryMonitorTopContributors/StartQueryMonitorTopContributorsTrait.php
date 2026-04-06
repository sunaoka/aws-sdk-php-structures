<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StartQueryMonitorTopContributors;

trait StartQueryMonitorTopContributorsTrait
{
    /**
     * @param StartQueryMonitorTopContributorsRequest $args
     * @return StartQueryMonitorTopContributorsResponse
     */
    public function startQueryMonitorTopContributors(StartQueryMonitorTopContributorsRequest $args)
    {
        $result = parent::startQueryMonitorTopContributors($args->toArray());
        return new StartQueryMonitorTopContributorsResponse($result->toArray());
    }
}
