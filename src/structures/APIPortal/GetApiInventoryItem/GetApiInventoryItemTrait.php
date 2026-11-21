<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetApiInventoryItem;

trait GetApiInventoryItemTrait
{
    /**
     * @param GetApiInventoryItemRequest $args
     * @return GetApiInventoryItemResponse
     */
    public function getApiInventoryItem(GetApiInventoryItemRequest $args)
    {
        $result = parent::getApiInventoryItem($args->toArray());
        return new GetApiInventoryItemResponse($result->toArray());
    }
}
