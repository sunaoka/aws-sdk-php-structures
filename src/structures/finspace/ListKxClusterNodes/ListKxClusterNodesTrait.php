<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusterNodes;

trait ListKxClusterNodesTrait
{
    /**
     * @param ListKxClusterNodesRequest $args
     * @return ListKxClusterNodesResponse
     */
    public function listKxClusterNodes(ListKxClusterNodesRequest $args)
    {
        $result = parent::listKxClusterNodes($args->toArray());
        return new ListKxClusterNodesResponse($result->toArray());
    }
}
