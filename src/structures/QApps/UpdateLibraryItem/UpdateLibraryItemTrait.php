<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateLibraryItem;

trait UpdateLibraryItemTrait
{
    /**
     * @param UpdateLibraryItemRequest $args
     * @return UpdateLibraryItemResponse
     */
    public function updateLibraryItem(UpdateLibraryItemRequest $args)
    {
        $result = parent::updateLibraryItem($args->toArray());
        return new UpdateLibraryItemResponse($result->toArray());
    }
}
