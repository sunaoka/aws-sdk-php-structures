<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelineEndpointConnections;

trait ListPipelineEndpointConnectionsTrait
{
    /**
     * @param ListPipelineEndpointConnectionsRequest $args
     * @return ListPipelineEndpointConnectionsResponse
     */
    public function listPipelineEndpointConnections(ListPipelineEndpointConnectionsRequest $args)
    {
        $result = parent::listPipelineEndpointConnections($args->toArray());
        return new ListPipelineEndpointConnectionsResponse($result->toArray());
    }
}
