<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartDomainMaintenance;

trait StartDomainMaintenanceTrait
{
    /**
     * @param StartDomainMaintenanceRequest $args
     * @return StartDomainMaintenanceResponse
     */
    public function startDomainMaintenance(StartDomainMaintenanceRequest $args)
    {
        $result = parent::startDomainMaintenance($args->toArray());
        return new StartDomainMaintenanceResponse($result->toArray());
    }
}
