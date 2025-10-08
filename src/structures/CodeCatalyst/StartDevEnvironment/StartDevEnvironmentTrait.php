<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartDevEnvironment;

trait StartDevEnvironmentTrait
{
    /**
     * @param StartDevEnvironmentRequest $args
     * @return StartDevEnvironmentResponse
     */
    public function startDevEnvironment(StartDevEnvironmentRequest $args)
    {
        $result = parent::startDevEnvironment($args->toArray());
        return new StartDevEnvironmentResponse($result->toArray());
    }
}
