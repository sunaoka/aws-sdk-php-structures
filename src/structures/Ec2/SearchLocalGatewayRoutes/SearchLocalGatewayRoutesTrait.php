<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchLocalGatewayRoutes;

trait SearchLocalGatewayRoutesTrait
{
    /**
     * @param SearchLocalGatewayRoutesRequest $args
     * @return SearchLocalGatewayRoutesResponse
     */
    public function searchLocalGatewayRoutes(SearchLocalGatewayRoutesRequest $args)
    {
        $result = parent::searchLocalGatewayRoutes($args->toArray());
        return new SearchLocalGatewayRoutesResponse($result->toArray());
    }
}
