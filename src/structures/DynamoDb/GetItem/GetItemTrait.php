<?php

namespace Sunaoka\Aws\Structures\DynamoDb\GetItem;

trait GetItemTrait
{
    /**
     * @param GetItemRequest $args
     * @return GetItemResponse
     */
    public function getItem(GetItemRequest $args)
    {
        $result = parent::getItem($args->toArray());
        return new GetItemResponse($result->toArray());
    }
}
