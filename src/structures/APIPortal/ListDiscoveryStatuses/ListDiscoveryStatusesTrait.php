<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListDiscoveryStatuses;

trait ListDiscoveryStatusesTrait
{
    /**
     * @param ListDiscoveryStatusesRequest $args
     * @return ListDiscoveryStatusesResponse
     */
    public function listDiscoveryStatuses(ListDiscoveryStatusesRequest $args)
    {
        $result = parent::listDiscoveryStatuses($args->toArray());
        return new ListDiscoveryStatusesResponse($result->toArray());
    }
}
