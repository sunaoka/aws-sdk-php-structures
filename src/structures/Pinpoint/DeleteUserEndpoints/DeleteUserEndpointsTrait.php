<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteUserEndpoints;

trait DeleteUserEndpointsTrait
{
    /**
     * @param DeleteUserEndpointsRequest $args
     * @return DeleteUserEndpointsResponse
     */
    public function deleteUserEndpoints(DeleteUserEndpointsRequest $args)
    {
        $result = parent::deleteUserEndpoints($args->toArray());
        return new DeleteUserEndpointsResponse($result->toArray());
    }
}
