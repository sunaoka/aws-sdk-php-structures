<?php

namespace Sunaoka\Aws\Structures\Ecs\DisassociateGatewayFromCluster;

trait DisassociateGatewayFromClusterTrait
{
    /**
     * @param DisassociateGatewayFromClusterRequest $args
     * @return DisassociateGatewayFromClusterResponse
     */
    public function disassociateGatewayFromCluster(DisassociateGatewayFromClusterRequest $args)
    {
        $result = parent::disassociateGatewayFromCluster($args->toArray());
        return new DisassociateGatewayFromClusterResponse($result->toArray());
    }
}
