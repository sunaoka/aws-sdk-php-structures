<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\BatchCreateBillingAdjustmentRequest;

trait BatchCreateBillingAdjustmentRequestTrait
{
    /**
     * @param BatchCreateBillingAdjustmentRequestRequest $args
     * @return BatchCreateBillingAdjustmentRequestResponse
     */
    public function batchCreateBillingAdjustmentRequest(BatchCreateBillingAdjustmentRequestRequest $args)
    {
        $result = parent::batchCreateBillingAdjustmentRequest($args->toArray());
        return new BatchCreateBillingAdjustmentRequestResponse($result->toArray());
    }
}
