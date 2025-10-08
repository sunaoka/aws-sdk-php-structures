<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateBackendEnvironment;

trait CreateBackendEnvironmentTrait
{
    /**
     * @param CreateBackendEnvironmentRequest $args
     * @return CreateBackendEnvironmentResponse
     */
    public function createBackendEnvironment(CreateBackendEnvironmentRequest $args)
    {
        $result = parent::createBackendEnvironment($args->toArray());
        return new CreateBackendEnvironmentResponse($result->toArray());
    }
}
