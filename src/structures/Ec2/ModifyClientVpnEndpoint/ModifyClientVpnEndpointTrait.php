<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint;

trait ModifyClientVpnEndpointTrait
{
    /**
     * @param ModifyClientVpnEndpointRequest $args
     * @return ModifyClientVpnEndpointResponse
     */
    public function modifyClientVpnEndpoint(ModifyClientVpnEndpointRequest $args)
    {
        $result = parent::modifyClientVpnEndpoint($args->toArray());
        return new ModifyClientVpnEndpointResponse($result->toArray());
    }
}
