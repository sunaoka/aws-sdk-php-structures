<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnRoute;

trait CreateClientVpnRouteTrait
{
    /**
     * @param CreateClientVpnRouteRequest $args
     * @return CreateClientVpnRouteResponse
     */
    public function createClientVpnRoute(CreateClientVpnRouteRequest $args)
    {
        $result = parent::createClientVpnRoute($args->toArray());
        return new CreateClientVpnRouteResponse($result->toArray());
    }
}
