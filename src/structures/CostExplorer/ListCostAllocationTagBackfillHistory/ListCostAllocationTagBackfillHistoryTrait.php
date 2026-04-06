<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostAllocationTagBackfillHistory;

trait ListCostAllocationTagBackfillHistoryTrait
{
    /**
     * @param ListCostAllocationTagBackfillHistoryRequest $args
     * @return ListCostAllocationTagBackfillHistoryResponse
     */
    public function listCostAllocationTagBackfillHistory(ListCostAllocationTagBackfillHistoryRequest $args)
    {
        $result = parent::listCostAllocationTagBackfillHistory($args->toArray());
        return new ListCostAllocationTagBackfillHistoryResponse($result->toArray());
    }
}
