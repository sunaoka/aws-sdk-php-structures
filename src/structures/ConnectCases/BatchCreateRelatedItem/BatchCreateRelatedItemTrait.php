<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchCreateRelatedItem;

trait BatchCreateRelatedItemTrait
{
    /**
     * @param BatchCreateRelatedItemRequest $args
     * @return BatchCreateRelatedItemResponse
     */
    public function batchCreateRelatedItem(BatchCreateRelatedItemRequest $args)
    {
        $result = parent::batchCreateRelatedItem($args->toArray());
        return new BatchCreateRelatedItemResponse($result->toArray());
    }
}
