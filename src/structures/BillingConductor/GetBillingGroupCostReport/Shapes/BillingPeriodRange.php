<?php

namespace Sunaoka\Aws\Structures\BillingConductor\GetBillingGroupCostReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InclusiveStartBillingPeriod
 * @property string $ExclusiveEndBillingPeriod
 */
class BillingPeriodRange extends Shape
{
    /**
     * @param array{
     *     InclusiveStartBillingPeriod: string,
     *     ExclusiveEndBillingPeriod: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
