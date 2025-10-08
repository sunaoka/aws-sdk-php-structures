<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactGetItems;

trait TransactGetItemsTrait
{
    /**
     * @param TransactGetItemsRequest $args
     * @return TransactGetItemsResponse
     */
    public function transactGetItems(TransactGetItemsRequest $args)
    {
        $result = parent::transactGetItems($args->toArray());
        return new TransactGetItemsResponse($result->toArray());
    }
}
