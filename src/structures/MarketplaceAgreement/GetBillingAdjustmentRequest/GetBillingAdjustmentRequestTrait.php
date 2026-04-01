<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetBillingAdjustmentRequest;

trait GetBillingAdjustmentRequestTrait
{
    /**
     * @param GetBillingAdjustmentRequestRequest $args
     * @return GetBillingAdjustmentRequestResponse
     */
    public function getBillingAdjustmentRequest(GetBillingAdjustmentRequestRequest $args)
    {
        $result = parent::getBillingAdjustmentRequest($args->toArray());
        return new GetBillingAdjustmentRequestResponse($result->toArray());
    }
}
