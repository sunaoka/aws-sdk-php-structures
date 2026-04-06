<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelineEndpoints;

trait ListPipelineEndpointsTrait
{
    /**
     * @param ListPipelineEndpointsRequest $args
     * @return ListPipelineEndpointsResponse
     */
    public function listPipelineEndpoints(ListPipelineEndpointsRequest $args)
    {
        $result = parent::listPipelineEndpoints($args->toArray());
        return new ListPipelineEndpointsResponse($result->toArray());
    }
}
