<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateRelatedItems;

trait UpdateRelatedItemsTrait
{
    /**
     * @param UpdateRelatedItemsRequest $args
     * @return UpdateRelatedItemsResponse
     */
    public function updateRelatedItems(UpdateRelatedItemsRequest $args)
    {
        $result = parent::updateRelatedItems($args->toArray());
        return new UpdateRelatedItemsResponse($result->toArray());
    }
}
