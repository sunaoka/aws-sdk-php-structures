<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxEnvironment;

trait DeleteKxEnvironmentTrait
{
    /**
     * @param DeleteKxEnvironmentRequest $args
     * @return DeleteKxEnvironmentResponse
     */
    public function deleteKxEnvironment(DeleteKxEnvironmentRequest $args)
    {
        $result = parent::deleteKxEnvironment($args->toArray());
        return new DeleteKxEnvironmentResponse($result->toArray());
    }
}
