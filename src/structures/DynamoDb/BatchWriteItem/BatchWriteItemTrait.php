<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem;

trait BatchWriteItemTrait
{
    /**
     * @param BatchWriteItemRequest $args
     * @return BatchWriteItemResponse
     */
    public function batchWriteItem(BatchWriteItemRequest $args)
    {
        $result = parent::batchWriteItem($args->toArray());
        return new BatchWriteItemResponse($result->toArray());
    }
}
