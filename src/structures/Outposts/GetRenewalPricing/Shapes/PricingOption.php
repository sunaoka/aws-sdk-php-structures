<?php

namespace Sunaoka\Aws\Structures\Outposts\GetRenewalPricing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBSCRIPTION'|null $PricingType
 * @property SubscriptionPricingDetails|null $SubscriptionPricingDetails
 */
class PricingOption extends Shape
{
    /**
     * @param array{
     *     PricingType?: 'SUBSCRIPTION'|null,
     *     SubscriptionPricingDetails?: SubscriptionPricingDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
