<?php

namespace Sunaoka\Aws\Structures\Odb\ListDbNodes;

trait ListDbNodesTrait
{
    /**
     * @param ListDbNodesRequest $args
     * @return ListDbNodesResponse
     */
    public function listDbNodes(ListDbNodesRequest $args)
    {
        $result = parent::listDbNodes($args->toArray());
        return new ListDbNodesResponse($result->toArray());
    }
}
