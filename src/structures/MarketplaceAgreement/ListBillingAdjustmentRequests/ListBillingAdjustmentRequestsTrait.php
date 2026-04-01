<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListBillingAdjustmentRequests;

trait ListBillingAdjustmentRequestsTrait
{
    /**
     * @param ListBillingAdjustmentRequestsRequest $args
     * @return ListBillingAdjustmentRequestsResponse
     */
    public function listBillingAdjustmentRequests(ListBillingAdjustmentRequestsRequest $args)
    {
        $result = parent::listBillingAdjustmentRequests($args->toArray());
        return new ListBillingAdjustmentRequestsResponse($result->toArray());
    }
}
