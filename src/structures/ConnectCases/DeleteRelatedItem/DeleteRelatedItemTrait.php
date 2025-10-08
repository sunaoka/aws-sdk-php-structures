<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteRelatedItem;

trait DeleteRelatedItemTrait
{
    /**
     * @param DeleteRelatedItemRequest $args
     * @return DeleteRelatedItemResponse
     */
    public function deleteRelatedItem(DeleteRelatedItemRequest $args)
    {
        $result = parent::deleteRelatedItem($args->toArray());
        return new DeleteRelatedItemResponse($result->toArray());
    }
}
