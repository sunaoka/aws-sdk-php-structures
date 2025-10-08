<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportTransitGatewayRoutes;

trait ExportTransitGatewayRoutesTrait
{
    /**
     * @param ExportTransitGatewayRoutesRequest $args
     * @return ExportTransitGatewayRoutesResponse
     */
    public function exportTransitGatewayRoutes(ExportTransitGatewayRoutesRequest $args)
    {
        $result = parent::exportTransitGatewayRoutes($args->toArray());
        return new ExportTransitGatewayRoutesResponse($result->toArray());
    }
}
