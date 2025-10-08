<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListNodes;

trait ListNodesTrait
{
    /**
     * @param ListNodesRequest $args
     * @return ListNodesResponse
     */
    public function listNodes(ListNodesRequest $args)
    {
        $result = parent::listNodes($args->toArray());
        return new ListNodesResponse($result->toArray());
    }
}
