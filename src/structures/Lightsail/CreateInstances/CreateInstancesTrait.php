<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstances;

trait CreateInstancesTrait
{
    /**
     * @param CreateInstancesRequest $args
     * @return CreateInstancesResponse
     */
    public function createInstances(CreateInstancesRequest $args)
    {
        $result = parent::createInstances($args->toArray());
        return new CreateInstancesResponse($result->toArray());
    }
}
