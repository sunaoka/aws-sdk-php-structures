<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCostEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $usageCost
 * @property 'GB'|'Hrs'|'GB-Mo'|'Bundles'|'Queries' $pricingUnit
 * @property double $unit
 * @property 'USD' $currency
 * @property TimePeriod $timePeriod
 */
class EstimateByTime extends Shape
{
    /**
     * @param array{
     *     usageCost?: double,
     *     pricingUnit?: 'GB'|'Hrs'|'GB-Mo'|'Bundles'|'Queries',
     *     unit?: double,
     *     currency?: 'USD',
     *     timePeriod?: TimePeriod
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
