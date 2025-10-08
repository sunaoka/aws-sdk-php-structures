<?php

namespace Sunaoka\Aws\Structures\Amplify\GetBackendEnvironment;

trait GetBackendEnvironmentTrait
{
    /**
     * @param GetBackendEnvironmentRequest $args
     * @return GetBackendEnvironmentResponse
     */
    public function getBackendEnvironment(GetBackendEnvironmentRequest $args)
    {
        $result = parent::getBackendEnvironment($args->toArray());
        return new GetBackendEnvironmentResponse($result->toArray());
    }
}
