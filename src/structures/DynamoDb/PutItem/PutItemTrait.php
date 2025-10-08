<?php

namespace Sunaoka\Aws\Structures\DynamoDb\PutItem;

trait PutItemTrait
{
    /**
     * @param PutItemRequest $args
     * @return PutItemResponse
     */
    public function putItem(PutItemRequest $args)
    {
        $result = parent::putItem($args->toArray());
        return new PutItemResponse($result->toArray());
    }
}
