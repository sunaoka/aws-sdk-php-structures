<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteItem;

trait DeleteItemTrait
{
    /**
     * @param DeleteItemRequest $args
     * @return DeleteItemResponse
     */
    public function deleteItem(DeleteItemRequest $args)
    {
        $result = parent::deleteItem($args->toArray());
        return new DeleteItemResponse($result->toArray());
    }
}
