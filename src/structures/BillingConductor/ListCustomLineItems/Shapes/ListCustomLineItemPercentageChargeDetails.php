<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $PercentageValue
 */
class ListCustomLineItemPercentageChargeDetails extends Shape
{
    /**
     * @param array{PercentageValue: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
