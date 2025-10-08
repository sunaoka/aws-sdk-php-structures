<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstances;

trait GetInstancesTrait
{
    /**
     * @param GetInstancesRequest $args
     * @return GetInstancesResponse
     */
    public function getInstances(GetInstancesRequest $args)
    {
        $result = parent::getInstances($args->toArray());
        return new GetInstancesResponse($result->toArray());
    }
}
