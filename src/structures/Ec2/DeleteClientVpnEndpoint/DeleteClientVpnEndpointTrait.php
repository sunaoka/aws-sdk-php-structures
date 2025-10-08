<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteClientVpnEndpoint;

trait DeleteClientVpnEndpointTrait
{
    /**
     * @param DeleteClientVpnEndpointRequest $args
     * @return DeleteClientVpnEndpointResponse
     */
    public function deleteClientVpnEndpoint(DeleteClientVpnEndpointRequest $args)
    {
        $result = parent::deleteClientVpnEndpoint($args->toArray());
        return new DeleteClientVpnEndpointResponse($result->toArray());
    }
}
