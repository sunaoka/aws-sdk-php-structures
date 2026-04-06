<?php

namespace Sunaoka\Aws\Structures\QApps\DeleteLibraryItem;

trait DeleteLibraryItemTrait
{
    /**
     * @param DeleteLibraryItemRequest $args
     * @return void
     */
    public function deleteLibraryItem(DeleteLibraryItemRequest $args)
    {
        parent::deleteLibraryItem($args->toArray());
    }
}
