<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteVpcEndpoint;

trait DeleteVpcEndpointTrait
{
    /**
     * @param DeleteVpcEndpointRequest $args
     * @return DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpoint(DeleteVpcEndpointRequest $args)
    {
        $result = parent::deleteVpcEndpoint($args->toArray());
        return new DeleteVpcEndpointResponse($result->toArray());
    }
}
