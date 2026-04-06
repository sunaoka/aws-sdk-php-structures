<?php

namespace Sunaoka\Aws\Structures\QApps\ListLibraryItems;

trait ListLibraryItemsTrait
{
    /**
     * @param ListLibraryItemsRequest $args
     * @return ListLibraryItemsResponse
     */
    public function listLibraryItems(ListLibraryItemsRequest $args)
    {
        $result = parent::listLibraryItems($args->toArray());
        return new ListLibraryItemsResponse($result->toArray());
    }
}
