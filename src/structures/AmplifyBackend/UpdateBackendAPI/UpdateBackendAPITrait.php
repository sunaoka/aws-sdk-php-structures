<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAPI;

trait UpdateBackendAPITrait
{
    /**
     * @param UpdateBackendAPIRequest $args
     * @return UpdateBackendAPIResponse
     */
    public function updateBackendAPI(UpdateBackendAPIRequest $args)
    {
        $result = parent::updateBackendAPI($args->toArray());
        return new UpdateBackendAPIResponse($result->toArray());
    }
}
