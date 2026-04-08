<?php

namespace Sunaoka\Aws\Structures\Outposts\GetRenewalPricing;

trait GetRenewalPricingTrait
{
    /**
     * @param GetRenewalPricingRequest $args
     * @return GetRenewalPricingResponse
     */
    public function getRenewalPricing(GetRenewalPricingRequest $args)
    {
        $result = parent::getRenewalPricing($args->toArray());
        return new GetRenewalPricingResponse($result->toArray());
    }
}
