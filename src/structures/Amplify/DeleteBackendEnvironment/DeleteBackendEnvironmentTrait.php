<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteBackendEnvironment;

trait DeleteBackendEnvironmentTrait
{
    /**
     * @param DeleteBackendEnvironmentRequest $args
     * @return DeleteBackendEnvironmentResponse
     */
    public function deleteBackendEnvironment(DeleteBackendEnvironmentRequest $args)
    {
        $result = parent::deleteBackendEnvironment($args->toArray());
        return new DeleteBackendEnvironmentResponse($result->toArray());
    }
}
