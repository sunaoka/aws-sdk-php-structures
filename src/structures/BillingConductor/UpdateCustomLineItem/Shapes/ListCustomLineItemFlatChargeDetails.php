<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ChargeValue
 */
class ListCustomLineItemFlatChargeDetails extends Shape
{
    /**
     * @param array{ChargeValue: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
