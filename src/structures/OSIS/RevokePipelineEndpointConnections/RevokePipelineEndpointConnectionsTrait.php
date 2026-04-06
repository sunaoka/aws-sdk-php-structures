<?php

namespace Sunaoka\Aws\Structures\OSIS\RevokePipelineEndpointConnections;

trait RevokePipelineEndpointConnectionsTrait
{
    /**
     * @param RevokePipelineEndpointConnectionsRequest $args
     * @return RevokePipelineEndpointConnectionsResponse
     */
    public function revokePipelineEndpointConnections(RevokePipelineEndpointConnectionsRequest $args)
    {
        $result = parent::revokePipelineEndpointConnections($args->toArray());
        return new RevokePipelineEndpointConnectionsResponse($result->toArray());
    }
}
