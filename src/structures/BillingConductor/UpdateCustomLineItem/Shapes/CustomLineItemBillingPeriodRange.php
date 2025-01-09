<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InclusiveStartBillingPeriod
 * @property string $ExclusiveEndBillingPeriod
 */
class CustomLineItemBillingPeriodRange extends Shape
{
    /**
     * @param array{
     *     InclusiveStartBillingPeriod: string,
     *     ExclusiveEndBillingPeriod?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
