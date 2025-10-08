<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteClientVpnRoute;

trait DeleteClientVpnRouteTrait
{
    /**
     * @param DeleteClientVpnRouteRequest $args
     * @return DeleteClientVpnRouteResponse
     */
    public function deleteClientVpnRoute(DeleteClientVpnRouteRequest $args)
    {
        $result = parent::deleteClientVpnRoute($args->toArray());
        return new DeleteClientVpnRouteResponse($result->toArray());
    }
}
