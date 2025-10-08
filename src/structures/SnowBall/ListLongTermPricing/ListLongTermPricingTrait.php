<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListLongTermPricing;

trait ListLongTermPricingTrait
{
    /**
     * @param ListLongTermPricingRequest $args
     * @return ListLongTermPricingResponse
     */
    public function listLongTermPricing(ListLongTermPricingRequest $args)
    {
        $result = parent::listLongTermPricing($args->toArray());
        return new ListLongTermPricingResponse($result->toArray());
    }
}
