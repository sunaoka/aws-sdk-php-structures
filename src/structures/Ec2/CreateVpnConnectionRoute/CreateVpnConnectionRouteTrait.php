<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnectionRoute;

trait CreateVpnConnectionRouteTrait
{
    /**
     * @param CreateVpnConnectionRouteRequest $args
     * @return void
     */
    public function createVpnConnectionRoute(CreateVpnConnectionRouteRequest $args)
    {
        parent::createVpnConnectionRoute($args->toArray());
    }
}
