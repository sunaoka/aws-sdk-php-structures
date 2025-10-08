<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\DeleteOriginEndpoint;

trait DeleteOriginEndpointTrait
{
    /**
     * @param DeleteOriginEndpointRequest $args
     * @return DeleteOriginEndpointResponse
     */
    public function deleteOriginEndpoint(DeleteOriginEndpointRequest $args)
    {
        $result = parent::deleteOriginEndpoint($args->toArray());
        return new DeleteOriginEndpointResponse($result->toArray());
    }
}
