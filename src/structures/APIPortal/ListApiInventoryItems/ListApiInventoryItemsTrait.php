<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListApiInventoryItems;

trait ListApiInventoryItemsTrait
{
    /**
     * @param ListApiInventoryItemsRequest $args
     * @return ListApiInventoryItemsResponse
     */
    public function listApiInventoryItems(ListApiInventoryItemsRequest $args)
    {
        $result = parent::listApiInventoryItems($args->toArray());
        return new ListApiInventoryItemsResponse($result->toArray());
    }
}
