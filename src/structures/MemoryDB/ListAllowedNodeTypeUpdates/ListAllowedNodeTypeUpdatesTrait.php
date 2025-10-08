<?php

namespace Sunaoka\Aws\Structures\MemoryDB\ListAllowedNodeTypeUpdates;

trait ListAllowedNodeTypeUpdatesTrait
{
    /**
     * @param ListAllowedNodeTypeUpdatesRequest $args
     * @return ListAllowedNodeTypeUpdatesResponse
     */
    public function listAllowedNodeTypeUpdates(ListAllowedNodeTypeUpdatesRequest $args)
    {
        $result = parent::listAllowedNodeTypeUpdates($args->toArray());
        return new ListAllowedNodeTypeUpdatesResponse($result->toArray());
    }
}
