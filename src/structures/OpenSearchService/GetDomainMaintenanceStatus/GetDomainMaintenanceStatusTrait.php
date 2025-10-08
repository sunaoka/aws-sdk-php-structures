<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDomainMaintenanceStatus;

trait GetDomainMaintenanceStatusTrait
{
    /**
     * @param GetDomainMaintenanceStatusRequest $args
     * @return GetDomainMaintenanceStatusResponse
     */
    public function getDomainMaintenanceStatus(GetDomainMaintenanceStatusRequest $args)
    {
        $result = parent::getDomainMaintenanceStatus($args->toArray());
        return new GetDomainMaintenanceStatusResponse($result->toArray());
    }
}
