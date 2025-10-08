<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpnConnectionRoute;

trait DeleteVpnConnectionRouteTrait
{
    /**
     * @param DeleteVpnConnectionRouteRequest $args
     * @return void
     */
    public function deleteVpnConnectionRoute(DeleteVpnConnectionRouteRequest $args)
    {
        parent::deleteVpnConnectionRoute($args->toArray());
    }
}
