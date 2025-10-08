<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchGetItem;

trait BatchGetItemTrait
{
    /**
     * @param BatchGetItemRequest $args
     * @return BatchGetItemResponse
     */
    public function batchGetItem(BatchGetItemRequest $args)
    {
        $result = parent::batchGetItem($args->toArray());
        return new BatchGetItemResponse($result->toArray());
    }
}
