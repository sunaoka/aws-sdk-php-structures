<?php

namespace Sunaoka\Aws\Structures\Ecs\AssociateGatewayWithCluster;

trait AssociateGatewayWithClusterTrait
{
    /**
     * @param AssociateGatewayWithClusterRequest $args
     * @return AssociateGatewayWithClusterResponse
     */
    public function associateGatewayWithCluster(AssociateGatewayWithClusterRequest $args)
    {
        $result = parent::associateGatewayWithCluster($args->toArray());
        return new AssociateGatewayWithClusterResponse($result->toArray());
    }
}
