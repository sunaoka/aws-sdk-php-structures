<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListVirtualNodes;

trait ListVirtualNodesTrait
{
    /**
     * @param ListVirtualNodesRequest $args
     * @return ListVirtualNodesResponse
     */
    public function listVirtualNodes(ListVirtualNodesRequest $args)
    {
        $result = parent::listVirtualNodes($args->toArray());
        return new ListVirtualNodesResponse($result->toArray());
    }
}
