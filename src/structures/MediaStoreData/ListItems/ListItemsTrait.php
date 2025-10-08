<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\ListItems;

trait ListItemsTrait
{
    /**
     * @param ListItemsRequest $args
     * @return ListItemsResponse
     */
    public function listItems(ListItemsRequest $args)
    {
        $result = parent::listItems($args->toArray());
        return new ListItemsResponse($result->toArray());
    }
}
