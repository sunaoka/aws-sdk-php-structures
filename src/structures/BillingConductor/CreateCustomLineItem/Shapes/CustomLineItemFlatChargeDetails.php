<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ChargeValue
 */
class CustomLineItemFlatChargeDetails extends Shape
{
    /**
     * @param array{ChargeValue: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
