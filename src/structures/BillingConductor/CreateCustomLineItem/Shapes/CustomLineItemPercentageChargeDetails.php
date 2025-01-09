<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $PercentageValue
 * @property list<string> $AssociatedValues
 */
class CustomLineItemPercentageChargeDetails extends Shape
{
    /**
     * @param array{
     *     PercentageValue: double,
     *     AssociatedValues?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
