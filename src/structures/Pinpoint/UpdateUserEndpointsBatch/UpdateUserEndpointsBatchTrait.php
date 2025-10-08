<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateUserEndpointsBatch;

trait UpdateUserEndpointsBatchTrait
{
    /**
     * @param UpdateUserEndpointsBatchRequest $args
     * @return UpdateUserEndpointsBatchResponse
     */
    public function updateUserEndpointsBatch(UpdateUserEndpointsBatchRequest $args)
    {
        $result = parent::updateUserEndpointsBatch($args->toArray());
        return new UpdateUserEndpointsBatchResponse($result->toArray());
    }
}
