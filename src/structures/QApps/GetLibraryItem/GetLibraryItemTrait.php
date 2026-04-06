<?php

namespace Sunaoka\Aws\Structures\QApps\GetLibraryItem;

trait GetLibraryItemTrait
{
    /**
     * @param GetLibraryItemRequest $args
     * @return GetLibraryItemResponse
     */
    public function getLibraryItem(GetLibraryItemRequest $args)
    {
        $result = parent::getLibraryItem($args->toArray());
        return new GetLibraryItemResponse($result->toArray());
    }
}
