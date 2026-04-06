<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\StartMaintenance;

trait StartMaintenanceTrait
{
    /**
     * @param StartMaintenanceRequest $args
     * @return StartMaintenanceResponse
     */
    public function startMaintenance(StartMaintenanceRequest $args)
    {
        $result = parent::startMaintenance($args->toArray());
        return new StartMaintenanceResponse($result->toArray());
    }
}
