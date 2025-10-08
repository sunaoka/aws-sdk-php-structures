<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\InitializeCluster;

trait InitializeClusterTrait
{
    /**
     * @param InitializeClusterRequest $args
     * @return InitializeClusterResponse
     */
    public function initializeCluster(InitializeClusterRequest $args)
    {
        $result = parent::initializeCluster($args->toArray());
        return new InitializeClusterResponse($result->toArray());
    }
}
