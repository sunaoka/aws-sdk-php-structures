<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\DeleteDevEnvironment;

trait DeleteDevEnvironmentTrait
{
    /**
     * @param DeleteDevEnvironmentRequest $args
     * @return DeleteDevEnvironmentResponse
     */
    public function deleteDevEnvironment(DeleteDevEnvironmentRequest $args)
    {
        $result = parent::deleteDevEnvironment($args->toArray());
        return new DeleteDevEnvironmentResponse($result->toArray());
    }
}
