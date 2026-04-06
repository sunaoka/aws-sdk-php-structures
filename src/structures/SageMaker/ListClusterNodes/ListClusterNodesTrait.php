<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterNodes;

trait ListClusterNodesTrait
{
    /**
     * @param ListClusterNodesRequest $args
     * @return ListClusterNodesResponse
     */
    public function listClusterNodes(ListClusterNodesRequest $args)
    {
        $result = parent::listClusterNodes($args->toArray());
        return new ListClusterNodesResponse($result->toArray());
    }
}
