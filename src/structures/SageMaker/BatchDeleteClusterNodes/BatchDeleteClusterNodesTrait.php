<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDeleteClusterNodes;

trait BatchDeleteClusterNodesTrait
{
    /**
     * @param BatchDeleteClusterNodesRequest $args
     * @return BatchDeleteClusterNodesResponse
     */
    public function batchDeleteClusterNodes(BatchDeleteClusterNodesRequest $args)
    {
        $result = parent::batchDeleteClusterNodes($args->toArray());
        return new BatchDeleteClusterNodesResponse($result->toArray());
    }
}
