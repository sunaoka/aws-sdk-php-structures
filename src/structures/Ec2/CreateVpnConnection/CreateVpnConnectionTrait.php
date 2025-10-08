<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection;

trait CreateVpnConnectionTrait
{
    /**
     * @param CreateVpnConnectionRequest $args
     * @return CreateVpnConnectionResponse
     */
    public function createVpnConnection(CreateVpnConnectionRequest $args)
    {
        $result = parent::createVpnConnection($args->toArray());
        return new CreateVpnConnectionResponse($result->toArray());
    }
}
