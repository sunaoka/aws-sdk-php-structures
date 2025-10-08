<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachVpnGateway;

trait AttachVpnGatewayTrait
{
    /**
     * @param AttachVpnGatewayRequest $args
     * @return AttachVpnGatewayResponse
     */
    public function attachVpnGateway(AttachVpnGatewayRequest $args)
    {
        $result = parent::attachVpnGateway($args->toArray());
        return new AttachVpnGatewayResponse($result->toArray());
    }
}
