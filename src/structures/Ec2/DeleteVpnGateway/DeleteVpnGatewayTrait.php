<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpnGateway;

trait DeleteVpnGatewayTrait
{
    /**
     * @param DeleteVpnGatewayRequest $args
     * @return void
     */
    public function deleteVpnGateway(DeleteVpnGatewayRequest $args)
    {
        parent::deleteVpnGateway($args->toArray());
    }
}
