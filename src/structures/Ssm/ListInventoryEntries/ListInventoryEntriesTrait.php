<?php

namespace Sunaoka\Aws\Structures\Ssm\ListInventoryEntries;

trait ListInventoryEntriesTrait
{
    /**
     * @param ListInventoryEntriesRequest $args
     * @return ListInventoryEntriesResponse
     */
    public function listInventoryEntries(ListInventoryEntriesRequest $args)
    {
        $result = parent::listInventoryEntries($args->toArray());
        return new ListInventoryEntriesResponse($result->toArray());
    }
}
