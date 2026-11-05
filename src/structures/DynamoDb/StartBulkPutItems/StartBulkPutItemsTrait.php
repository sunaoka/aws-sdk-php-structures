<?php

namespace Sunaoka\Aws\Structures\DynamoDb\StartBulkPutItems;

trait StartBulkPutItemsTrait
{
    /**
     * @param StartBulkPutItemsRequest $args
     * @return StartBulkPutItemsResponse
     */
    public function startBulkPutItems(StartBulkPutItemsRequest $args)
    {
        $result = parent::startBulkPutItems($args->toArray());
        return new StartBulkPutItemsResponse($result->toArray());
    }
}
