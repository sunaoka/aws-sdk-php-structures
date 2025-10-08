<?php

namespace Sunaoka\Aws\Structures\finspace\CreateEnvironment;

trait CreateEnvironmentTrait
{
    /**
     * @param CreateEnvironmentRequest $args
     * @return CreateEnvironmentResponse
     */
    public function createEnvironment(CreateEnvironmentRequest $args)
    {
        $result = parent::createEnvironment($args->toArray());
        return new CreateEnvironmentResponse($result->toArray());
    }
}
