<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchAddClusterNodes;

trait BatchAddClusterNodesTrait
{
    /**
     * @param BatchAddClusterNodesRequest $args
     * @return BatchAddClusterNodesResponse
     */
    public function batchAddClusterNodes(BatchAddClusterNodesRequest $args)
    {
        $result = parent::batchAddClusterNodes($args->toArray());
        return new BatchAddClusterNodesResponse($result->toArray());
    }
}
