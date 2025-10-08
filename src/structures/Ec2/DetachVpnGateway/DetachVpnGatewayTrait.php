<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVpnGateway;

trait DetachVpnGatewayTrait
{
    /**
     * @param DetachVpnGatewayRequest $args
     * @return void
     */
    public function detachVpnGateway(DetachVpnGatewayRequest $args)
    {
        parent::detachVpnGateway($args->toArray());
    }
}
