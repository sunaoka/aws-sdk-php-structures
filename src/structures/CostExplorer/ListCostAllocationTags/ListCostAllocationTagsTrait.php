<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostAllocationTags;

trait ListCostAllocationTagsTrait
{
    /**
     * @param ListCostAllocationTagsRequest $args
     * @return ListCostAllocationTagsResponse
     */
    public function listCostAllocationTags(ListCostAllocationTagsRequest $args)
    {
        $result = parent::listCostAllocationTags($args->toArray());
        return new ListCostAllocationTagsResponse($result->toArray());
    }
}
