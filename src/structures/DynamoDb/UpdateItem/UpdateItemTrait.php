<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateItem;

trait UpdateItemTrait
{
    /**
     * @param UpdateItemRequest $args
     * @return UpdateItemResponse
     */
    public function updateItem(UpdateItemRequest $args)
    {
        $result = parent::updateItem($args->toArray());
        return new UpdateItemResponse($result->toArray());
    }
}
