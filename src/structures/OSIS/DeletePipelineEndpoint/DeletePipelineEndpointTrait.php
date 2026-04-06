<?php

namespace Sunaoka\Aws\Structures\OSIS\DeletePipelineEndpoint;

trait DeletePipelineEndpointTrait
{
    /**
     * @param DeletePipelineEndpointRequest $args
     * @return DeletePipelineEndpointResponse
     */
    public function deletePipelineEndpoint(DeletePipelineEndpointRequest $args)
    {
        $result = parent::deletePipelineEndpoint($args->toArray());
        return new DeletePipelineEndpointResponse($result->toArray());
    }
}
