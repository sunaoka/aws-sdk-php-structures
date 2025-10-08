<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateVpcEndpoint;

trait UpdateVpcEndpointTrait
{
    /**
     * @param UpdateVpcEndpointRequest $args
     * @return UpdateVpcEndpointResponse
     */
    public function updateVpcEndpoint(UpdateVpcEndpointRequest $args)
    {
        $result = parent::updateVpcEndpoint($args->toArray());
        return new UpdateVpcEndpointResponse($result->toArray());
    }
}
