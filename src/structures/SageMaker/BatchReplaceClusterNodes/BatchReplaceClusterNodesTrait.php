<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchReplaceClusterNodes;

trait BatchReplaceClusterNodesTrait
{
    /**
     * @param BatchReplaceClusterNodesRequest $args
     * @return BatchReplaceClusterNodesResponse
     */
    public function batchReplaceClusterNodes(BatchReplaceClusterNodesRequest $args)
    {
        $result = parent::batchReplaceClusterNodes($args->toArray());
        return new BatchReplaceClusterNodesResponse($result->toArray());
    }
}
