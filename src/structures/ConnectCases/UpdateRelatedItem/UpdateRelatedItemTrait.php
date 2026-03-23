<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateRelatedItem;

trait UpdateRelatedItemTrait
{
    /**
     * @param UpdateRelatedItemRequest $args
     * @return UpdateRelatedItemResponse
     */
    public function updateRelatedItem(UpdateRelatedItemRequest $args)
    {
        $result = parent::updateRelatedItem($args->toArray());
        return new UpdateRelatedItemResponse($result->toArray());
    }
}
