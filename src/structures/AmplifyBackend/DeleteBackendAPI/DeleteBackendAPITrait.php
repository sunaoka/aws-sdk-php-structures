<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteBackendAPI;

trait DeleteBackendAPITrait
{
    /**
     * @param DeleteBackendAPIRequest $args
     * @return DeleteBackendAPIResponse
     */
    public function deleteBackendAPI(DeleteBackendAPIRequest $args)
    {
        $result = parent::deleteBackendAPI($args->toArray());
        return new DeleteBackendAPIResponse($result->toArray());
    }
}
