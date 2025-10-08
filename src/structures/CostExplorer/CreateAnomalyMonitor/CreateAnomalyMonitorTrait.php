<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalyMonitor;

trait CreateAnomalyMonitorTrait
{
    /**
     * @param CreateAnomalyMonitorRequest $args
     * @return CreateAnomalyMonitorResponse
     */
    public function createAnomalyMonitor(CreateAnomalyMonitorRequest $args)
    {
        $result = parent::createAnomalyMonitor($args->toArray());
        return new CreateAnomalyMonitorResponse($result->toArray());
    }
}
