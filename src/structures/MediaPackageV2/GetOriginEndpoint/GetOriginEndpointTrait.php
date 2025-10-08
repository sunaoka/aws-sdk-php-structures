<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint;

trait GetOriginEndpointTrait
{
    /**
     * @param GetOriginEndpointRequest $args
     * @return GetOriginEndpointResponse
     */
    public function getOriginEndpoint(GetOriginEndpointRequest $args)
    {
        $result = parent::getOriginEndpoint($args->toArray());
        return new GetOriginEndpointResponse($result->toArray());
    }
}
