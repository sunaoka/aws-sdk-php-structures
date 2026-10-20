<?php

namespace Sunaoka\Aws\Structures\Ecs\ListGatewayClusterAssociations;

trait ListGatewayClusterAssociationsTrait
{
    /**
     * @param ListGatewayClusterAssociationsRequest $args
     * @return ListGatewayClusterAssociationsResponse
     */
    public function listGatewayClusterAssociations(ListGatewayClusterAssociationsRequest $args)
    {
        $result = parent::listGatewayClusterAssociations($args->toArray());
        return new ListGatewayClusterAssociationsResponse($result->toArray());
    }
}
