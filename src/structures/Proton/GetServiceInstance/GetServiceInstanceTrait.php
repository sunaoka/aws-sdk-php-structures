<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceInstance;

trait GetServiceInstanceTrait
{
    /**
     * @param GetServiceInstanceRequest $args
     * @return GetServiceInstanceResponse
     */
    public function getServiceInstance(GetServiceInstanceRequest $args)
    {
        $result = parent::getServiceInstance($args->toArray());
        return new GetServiceInstanceResponse($result->toArray());
    }
}
