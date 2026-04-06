<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ResetOriginEndpointState;

trait ResetOriginEndpointStateTrait
{
    /**
     * @param ResetOriginEndpointStateRequest $args
     * @return ResetOriginEndpointStateResponse
     */
    public function resetOriginEndpointState(ResetOriginEndpointStateRequest $args)
    {
        $result = parent::resetOriginEndpointState($args->toArray());
        return new ResetOriginEndpointStateResponse($result->toArray());
    }
}
