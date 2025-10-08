<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpnConnection;

trait DeleteVpnConnectionTrait
{
    /**
     * @param DeleteVpnConnectionRequest $args
     * @return void
     */
    public function deleteVpnConnection(DeleteVpnConnectionRequest $args)
    {
        parent::deleteVpnConnection($args->toArray());
    }
}
