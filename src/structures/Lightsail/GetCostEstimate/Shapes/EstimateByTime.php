<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCostEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $usageCost
 * @property 'GB'|'Hrs'|'GB-Mo'|'Bundles'|'Queries'|null $pricingUnit
 * @property double|null $unit
 * @property 'USD'|null $currency
 * @property TimePeriod|null $timePeriod
 */
class EstimateByTime extends Shape
{
    /**
     * @param array{
     *     usageCost?: double|null,
     *     pricingUnit?: 'GB'|'Hrs'|'GB-Mo'|'Bundles'|'Queries'|null,
     *     unit?: double|null,
     *     currency?: 'USD'|null,
     *     timePeriod?: TimePeriod|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
