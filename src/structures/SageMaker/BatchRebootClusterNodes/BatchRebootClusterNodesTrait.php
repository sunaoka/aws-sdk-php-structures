<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchRebootClusterNodes;

trait BatchRebootClusterNodesTrait
{
    /**
     * @param BatchRebootClusterNodesRequest $args
     * @return BatchRebootClusterNodesResponse
     */
    public function batchRebootClusterNodes(BatchRebootClusterNodesRequest $args)
    {
        $result = parent::batchRebootClusterNodes($args->toArray());
        return new BatchRebootClusterNodesResponse($result->toArray());
    }
}
