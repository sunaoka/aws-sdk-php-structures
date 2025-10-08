<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchTransitGatewayRoutes;

trait SearchTransitGatewayRoutesTrait
{
    /**
     * @param SearchTransitGatewayRoutesRequest $args
     * @return SearchTransitGatewayRoutesResponse
     */
    public function searchTransitGatewayRoutes(SearchTransitGatewayRoutesRequest $args)
    {
        $result = parent::searchTransitGatewayRoutes($args->toArray());
        return new SearchTransitGatewayRoutesResponse($result->toArray());
    }
}
