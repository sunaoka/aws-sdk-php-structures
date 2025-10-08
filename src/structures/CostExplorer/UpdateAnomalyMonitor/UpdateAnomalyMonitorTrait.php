<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateAnomalyMonitor;

trait UpdateAnomalyMonitorTrait
{
    /**
     * @param UpdateAnomalyMonitorRequest $args
     * @return UpdateAnomalyMonitorResponse
     */
    public function updateAnomalyMonitor(UpdateAnomalyMonitorRequest $args)
    {
        $result = parent::updateAnomalyMonitor($args->toArray());
        return new UpdateAnomalyMonitorResponse($result->toArray());
    }
}
