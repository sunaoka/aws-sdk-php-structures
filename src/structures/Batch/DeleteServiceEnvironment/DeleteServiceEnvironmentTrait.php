<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteServiceEnvironment;

trait DeleteServiceEnvironmentTrait
{
    /**
     * @param DeleteServiceEnvironmentRequest $args
     * @return DeleteServiceEnvironmentResponse
     */
    public function deleteServiceEnvironment(DeleteServiceEnvironmentRequest $args)
    {
        $result = parent::deleteServiceEnvironment($args->toArray());
        return new DeleteServiceEnvironmentResponse($result->toArray());
    }
}
