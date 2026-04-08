<?php

namespace Sunaoka\Aws\Structures\Outposts\GetRenewalPricing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'|null $PaymentOption
 * @property 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'|null $PaymentTerm
 * @property float|null $UpfrontPrice
 * @property float|null $MonthlyRecurringPrice
 */
class SubscriptionPricingDetails extends Shape
{
    /**
     * @param array{
     *     PaymentOption?: 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'|null,
     *     PaymentTerm?: 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'|null,
     *     UpfrontPrice?: float|null,
     *     MonthlyRecurringPrice?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
