<?php

namespace Sunaoka\Aws\Structures\Billing\GetCreditAllocationHistory;

trait GetCreditAllocationHistoryTrait
{
    /**
     * @param GetCreditAllocationHistoryRequest $args
     * @return GetCreditAllocationHistoryResponse
     */
    public function getCreditAllocationHistory(GetCreditAllocationHistoryRequest $args)
    {
        $result = parent::getCreditAllocationHistory($args->toArray());
        return new GetCreditAllocationHistoryResponse($result->toArray());
    }
}
