<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAPI;

trait GetBackendAPITrait
{
    /**
     * @param GetBackendAPIRequest $args
     * @return GetBackendAPIResponse
     */
    public function getBackendAPI(GetBackendAPIRequest $args)
    {
        $result = parent::getBackendAPI($args->toArray());
        return new GetBackendAPIResponse($result->toArray());
    }
}
