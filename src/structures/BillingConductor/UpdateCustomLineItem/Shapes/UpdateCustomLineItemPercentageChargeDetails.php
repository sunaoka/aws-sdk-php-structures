<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $PercentageValue
 */
class UpdateCustomLineItemPercentageChargeDetails extends Shape
{
    /**
     * @param array{PercentageValue: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
