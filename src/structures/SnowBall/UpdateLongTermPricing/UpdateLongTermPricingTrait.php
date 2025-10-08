<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateLongTermPricing;

trait UpdateLongTermPricingTrait
{
    /**
     * @param UpdateLongTermPricingRequest $args
     * @return UpdateLongTermPricingResponse
     */
    public function updateLongTermPricing(UpdateLongTermPricingRequest $args)
    {
        $result = parent::updateLongTermPricing($args->toArray());
        return new UpdateLongTermPricingResponse($result->toArray());
    }
}
