<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalyMonitors;

trait GetAnomalyMonitorsTrait
{
    /**
     * @param GetAnomalyMonitorsRequest $args
     * @return GetAnomalyMonitorsResponse
     */
    public function getAnomalyMonitors(GetAnomalyMonitorsRequest $args)
    {
        $result = parent::getAnomalyMonitors($args->toArray());
        return new GetAnomalyMonitorsResponse($result->toArray());
    }
}
