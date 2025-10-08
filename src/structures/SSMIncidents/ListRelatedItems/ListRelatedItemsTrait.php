<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListRelatedItems;

trait ListRelatedItemsTrait
{
    /**
     * @param ListRelatedItemsRequest $args
     * @return ListRelatedItemsResponse
     */
    public function listRelatedItems(ListRelatedItemsRequest $args)
    {
        $result = parent::listRelatedItems($args->toArray());
        return new ListRelatedItemsResponse($result->toArray());
    }
}
