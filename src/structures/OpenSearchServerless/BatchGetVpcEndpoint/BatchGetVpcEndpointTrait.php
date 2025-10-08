<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetVpcEndpoint;

trait BatchGetVpcEndpointTrait
{
    /**
     * @param BatchGetVpcEndpointRequest $args
     * @return BatchGetVpcEndpointResponse
     */
    public function batchGetVpcEndpoint(BatchGetVpcEndpointRequest $args)
    {
        $result = parent::batchGetVpcEndpoint($args->toArray());
        return new BatchGetVpcEndpointResponse($result->toArray());
    }
}
