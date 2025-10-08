<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteBackend;

trait DeleteBackendTrait
{
    /**
     * @param DeleteBackendRequest $args
     * @return DeleteBackendResponse
     */
    public function deleteBackend(DeleteBackendRequest $args)
    {
        $result = parent::deleteBackend($args->toArray());
        return new DeleteBackendResponse($result->toArray());
    }
}
