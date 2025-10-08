<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAPI;

trait CreateBackendAPITrait
{
    /**
     * @param CreateBackendAPIRequest $args
     * @return CreateBackendAPIResponse
     */
    public function createBackendAPI(CreateBackendAPIRequest $args)
    {
        $result = parent::createBackendAPI($args->toArray());
        return new CreateBackendAPIResponse($result->toArray());
    }
}
