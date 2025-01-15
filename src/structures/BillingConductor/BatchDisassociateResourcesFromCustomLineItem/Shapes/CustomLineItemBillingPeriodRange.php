<?php

namespace Sunaoka\Aws\Structures\BillingConductor\BatchDisassociateResourcesFromCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InclusiveStartBillingPeriod
 * @property string|null $ExclusiveEndBillingPeriod
 */
class CustomLineItemBillingPeriodRange extends Shape
{
    /**
     * @param array{
     *     InclusiveStartBillingPeriod: string,
     *     ExclusiveEndBillingPeriod?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
