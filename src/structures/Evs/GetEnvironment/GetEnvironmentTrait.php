<?php

namespace Sunaoka\Aws\Structures\Evs\GetEnvironment;

trait GetEnvironmentTrait
{
    /**
     * @param GetEnvironmentRequest $args
     * @return GetEnvironmentResponse
     */
    public function getEnvironment(GetEnvironmentRequest $args)
    {
        $result = parent::getEnvironment($args->toArray());
        return new GetEnvironmentResponse($result->toArray());
    }
}
