<?php

namespace Sunaoka\Aws\Structures\Batch\CreateServiceEnvironment;

trait CreateServiceEnvironmentTrait
{
    /**
     * @param CreateServiceEnvironmentRequest $args
     * @return CreateServiceEnvironmentResponse
     */
    public function createServiceEnvironment(CreateServiceEnvironmentRequest $args)
    {
        $result = parent::createServiceEnvironment($args->toArray());
        return new CreateServiceEnvironmentResponse($result->toArray());
    }
}
