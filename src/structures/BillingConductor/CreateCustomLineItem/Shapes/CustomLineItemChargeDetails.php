<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomLineItemFlatChargeDetails|null $Flat
 * @property CustomLineItemPercentageChargeDetails|null $Percentage
 * @property 'CREDIT'|'FEE' $Type
 */
class CustomLineItemChargeDetails extends Shape
{
    /**
     * @param array{
     *     Flat?: CustomLineItemFlatChargeDetails|null,
     *     Percentage?: CustomLineItemPercentageChargeDetails|null,
     *     Type: 'CREDIT'|'FEE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
