<?php

namespace Sunaoka\Aws\Structures\SageMaker\MoveClusterNodes;

trait MoveClusterNodesTrait
{
    /**
     * @param MoveClusterNodesRequest $args
     * @return MoveClusterNodesResponse
     */
    public function moveClusterNodes(MoveClusterNodesRequest $args)
    {
        $result = parent::moveClusterNodes($args->toArray());
        return new MoveClusterNodesResponse($result->toArray());
    }
}
