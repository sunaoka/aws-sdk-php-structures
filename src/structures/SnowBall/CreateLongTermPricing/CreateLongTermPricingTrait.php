<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateLongTermPricing;

trait CreateLongTermPricingTrait
{
    /**
     * @param CreateLongTermPricingRequest $args
     * @return CreateLongTermPricingResponse
     */
    public function createLongTermPricing(CreateLongTermPricingRequest $args)
    {
        $result = parent::createLongTermPricing($args->toArray());
        return new CreateLongTermPricingResponse($result->toArray());
    }
}
