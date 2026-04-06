<?php

namespace Sunaoka\Aws\Structures\QApps\CreateLibraryItem;

trait CreateLibraryItemTrait
{
    /**
     * @param CreateLibraryItemRequest $args
     * @return CreateLibraryItemResponse
     */
    public function createLibraryItem(CreateLibraryItemRequest $args)
    {
        $result = parent::createLibraryItem($args->toArray());
        return new CreateLibraryItemResponse($result->toArray());
    }
}
