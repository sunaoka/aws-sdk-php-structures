<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateCustomLineItemFlatChargeDetails|null $Flat
 * @property UpdateCustomLineItemPercentageChargeDetails|null $Percentage
 */
class UpdateCustomLineItemChargeDetails extends Shape
{
    /**
     * @param array{
     *     Flat?: UpdateCustomLineItemFlatChargeDetails|null,
     *     Percentage?: UpdateCustomLineItemPercentageChargeDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
