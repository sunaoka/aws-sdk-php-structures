<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DeleteAnomalyMonitor;

trait DeleteAnomalyMonitorTrait
{
    /**
     * @param DeleteAnomalyMonitorRequest $args
     * @return DeleteAnomalyMonitorResponse
     */
    public function deleteAnomalyMonitor(DeleteAnomalyMonitorRequest $args)
    {
        $result = parent::deleteAnomalyMonitor($args->toArray());
        return new DeleteAnomalyMonitorResponse($result->toArray());
    }
}
