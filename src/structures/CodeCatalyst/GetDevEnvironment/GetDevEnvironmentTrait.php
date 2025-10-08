<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetDevEnvironment;

trait GetDevEnvironmentTrait
{
    /**
     * @param GetDevEnvironmentRequest $args
     * @return GetDevEnvironmentResponse
     */
    public function getDevEnvironment(GetDevEnvironmentRequest $args)
    {
        $result = parent::getDevEnvironment($args->toArray());
        return new GetDevEnvironmentResponse($result->toArray());
    }
}
