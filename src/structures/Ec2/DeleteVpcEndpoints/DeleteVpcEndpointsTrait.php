<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEndpoints;

trait DeleteVpcEndpointsTrait
{
    /**
     * @param DeleteVpcEndpointsRequest $args
     * @return DeleteVpcEndpointsResponse
     */
    public function deleteVpcEndpoints(DeleteVpcEndpointsRequest $args)
    {
        $result = parent::deleteVpcEndpoints($args->toArray());
        return new DeleteVpcEndpointsResponse($result->toArray());
    }
}
