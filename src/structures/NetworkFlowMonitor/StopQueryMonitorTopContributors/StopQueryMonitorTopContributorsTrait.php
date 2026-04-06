<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StopQueryMonitorTopContributors;

trait StopQueryMonitorTopContributorsTrait
{
    /**
     * @param StopQueryMonitorTopContributorsRequest $args
     * @return StopQueryMonitorTopContributorsResponse
     */
    public function stopQueryMonitorTopContributors(StopQueryMonitorTopContributorsRequest $args)
    {
        $result = parent::stopQueryMonitorTopContributors($args->toArray());
        return new StopQueryMonitorTopContributorsResponse($result->toArray());
    }
}
