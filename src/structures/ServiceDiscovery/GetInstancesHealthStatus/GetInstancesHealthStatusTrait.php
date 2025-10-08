<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetInstancesHealthStatus;

trait GetInstancesHealthStatusTrait
{
    /**
     * @param GetInstancesHealthStatusRequest $args
     * @return GetInstancesHealthStatusResponse
     */
    public function getInstancesHealthStatus(GetInstancesHealthStatusRequest $args)
    {
        $result = parent::getInstancesHealthStatus($args->toArray());
        return new GetInstancesHealthStatusResponse($result->toArray());
    }
}
