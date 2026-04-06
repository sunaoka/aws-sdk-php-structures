<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainMaintenances;

trait ListDomainMaintenancesTrait
{
    /**
     * @param ListDomainMaintenancesRequest $args
     * @return ListDomainMaintenancesResponse
     */
    public function listDomainMaintenances(ListDomainMaintenancesRequest $args)
    {
        $result = parent::listDomainMaintenances($args->toArray());
        return new ListDomainMaintenancesResponse($result->toArray());
    }
}
