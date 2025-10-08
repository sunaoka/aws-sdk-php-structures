<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostAllocationTagsStatus;

trait UpdateCostAllocationTagsStatusTrait
{
    /**
     * @param UpdateCostAllocationTagsStatusRequest $args
     * @return UpdateCostAllocationTagsStatusResponse
     */
    public function updateCostAllocationTagsStatus(UpdateCostAllocationTagsStatusRequest $args)
    {
        $result = parent::updateCostAllocationTagsStatus($args->toArray());
        return new UpdateCostAllocationTagsStatusResponse($result->toArray());
    }
}
