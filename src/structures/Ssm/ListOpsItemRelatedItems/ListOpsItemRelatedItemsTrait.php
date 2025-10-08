<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemRelatedItems;

trait ListOpsItemRelatedItemsTrait
{
    /**
     * @param ListOpsItemRelatedItemsRequest $args
     * @return ListOpsItemRelatedItemsResponse
     */
    public function listOpsItemRelatedItems(ListOpsItemRelatedItemsRequest $args)
    {
        $result = parent::listOpsItemRelatedItems($args->toArray());
        return new ListOpsItemRelatedItemsResponse($result->toArray());
    }
}
