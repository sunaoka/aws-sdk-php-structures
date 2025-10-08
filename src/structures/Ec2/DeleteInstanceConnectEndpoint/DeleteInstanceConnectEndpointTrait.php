<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInstanceConnectEndpoint;

trait DeleteInstanceConnectEndpointTrait
{
    /**
     * @param DeleteInstanceConnectEndpointRequest $args
     * @return DeleteInstanceConnectEndpointResponse
     */
    public function deleteInstanceConnectEndpoint(DeleteInstanceConnectEndpointRequest $args)
    {
        $result = parent::deleteInstanceConnectEndpoint($args->toArray());
        return new DeleteInstanceConnectEndpointResponse($result->toArray());
    }
}
