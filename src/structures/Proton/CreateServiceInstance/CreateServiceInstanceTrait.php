<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceInstance;

trait CreateServiceInstanceTrait
{
    /**
     * @param CreateServiceInstanceRequest $args
     * @return CreateServiceInstanceResponse
     */
    public function createServiceInstance(CreateServiceInstanceRequest $args)
    {
        $result = parent::createServiceInstance($args->toArray());
        return new CreateServiceInstanceResponse($result->toArray());
    }
}
