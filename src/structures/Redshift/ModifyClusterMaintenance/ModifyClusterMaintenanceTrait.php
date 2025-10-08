<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterMaintenance;

trait ModifyClusterMaintenanceTrait
{
    /**
     * @param ModifyClusterMaintenanceRequest $args
     * @return ModifyClusterMaintenanceResponse
     */
    public function modifyClusterMaintenance(ModifyClusterMaintenanceRequest $args)
    {
        $result = parent::modifyClusterMaintenance($args->toArray());
        return new ModifyClusterMaintenanceResponse($result->toArray());
    }
}
