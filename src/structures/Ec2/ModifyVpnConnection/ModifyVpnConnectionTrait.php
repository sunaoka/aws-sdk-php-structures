<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnection;

trait ModifyVpnConnectionTrait
{
    /**
     * @param ModifyVpnConnectionRequest $args
     * @return ModifyVpnConnectionResponse
     */
    public function modifyVpnConnection(ModifyVpnConnectionRequest $args)
    {
        $result = parent::modifyVpnConnection($args->toArray());
        return new ModifyVpnConnectionResponse($result->toArray());
    }
}
