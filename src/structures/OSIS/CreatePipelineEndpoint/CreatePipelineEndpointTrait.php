<?php

namespace Sunaoka\Aws\Structures\OSIS\CreatePipelineEndpoint;

trait CreatePipelineEndpointTrait
{
    /**
     * @param CreatePipelineEndpointRequest $args
     * @return CreatePipelineEndpointResponse
     */
    public function createPipelineEndpoint(CreatePipelineEndpointRequest $args)
    {
        $result = parent::createPipelineEndpoint($args->toArray());
        return new CreatePipelineEndpointResponse($result->toArray());
    }
}
