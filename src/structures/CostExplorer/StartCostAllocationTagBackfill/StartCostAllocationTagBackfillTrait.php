<?php

namespace Sunaoka\Aws\Structures\CostExplorer\StartCostAllocationTagBackfill;

trait StartCostAllocationTagBackfillTrait
{
    /**
     * @param StartCostAllocationTagBackfillRequest $args
     * @return StartCostAllocationTagBackfillResponse
     */
    public function startCostAllocationTagBackfill(StartCostAllocationTagBackfillRequest $args)
    {
        $result = parent::startCostAllocationTagBackfill($args->toArray());
        return new StartCostAllocationTagBackfillResponse($result->toArray());
    }
}
