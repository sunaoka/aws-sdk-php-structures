<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint;

trait CreateClientVpnEndpointTrait
{
    /**
     * @param CreateClientVpnEndpointRequest $args
     * @return CreateClientVpnEndpointResponse
     */
    public function createClientVpnEndpoint(CreateClientVpnEndpointRequest $args)
    {
        $result = parent::createClientVpnEndpoint($args->toArray());
        return new CreateClientVpnEndpointResponse($result->toArray());
    }
}
