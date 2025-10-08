<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateDevEnvironment;

trait CreateDevEnvironmentTrait
{
    /**
     * @param CreateDevEnvironmentRequest $args
     * @return CreateDevEnvironmentResponse
     */
    public function createDevEnvironment(CreateDevEnvironmentRequest $args)
    {
        $result = parent::createDevEnvironment($args->toArray());
        return new CreateDevEnvironmentResponse($result->toArray());
    }
}
