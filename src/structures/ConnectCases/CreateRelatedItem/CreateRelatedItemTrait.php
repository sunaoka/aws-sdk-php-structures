<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem;

trait CreateRelatedItemTrait
{
    /**
     * @param CreateRelatedItemRequest $args
     * @return CreateRelatedItemResponse
     */
    public function createRelatedItem(CreateRelatedItemRequest $args)
    {
        $result = parent::createRelatedItem($args->toArray());
        return new CreateRelatedItemResponse($result->toArray());
    }
}
