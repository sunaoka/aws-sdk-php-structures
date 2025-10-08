<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StopDevEnvironment;

trait StopDevEnvironmentTrait
{
    /**
     * @param StopDevEnvironmentRequest $args
     * @return StopDevEnvironmentResponse
     */
    public function stopDevEnvironment(StopDevEnvironmentRequest $args)
    {
        $result = parent::stopDevEnvironment($args->toArray());
        return new StopDevEnvironmentResponse($result->toArray());
    }
}
