<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems;

trait TransactWriteItemsTrait
{
    /**
     * @param TransactWriteItemsRequest $args
     * @return TransactWriteItemsResponse
     */
    public function transactWriteItems(TransactWriteItemsRequest $args)
    {
        $result = parent::transactWriteItems($args->toArray());
        return new TransactWriteItemsResponse($result->toArray());
    }
}
