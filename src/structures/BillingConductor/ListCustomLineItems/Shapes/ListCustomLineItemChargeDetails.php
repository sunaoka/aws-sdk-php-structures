<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListCustomLineItemFlatChargeDetails|null $Flat
 * @property ListCustomLineItemPercentageChargeDetails|null $Percentage
 * @property 'CREDIT'|'FEE' $Type
 */
class ListCustomLineItemChargeDetails extends Shape
{
    /**
     * @param array{
     *     Flat?: ListCustomLineItemFlatChargeDetails|null,
     *     Percentage?: ListCustomLineItemPercentageChargeDetails|null,
     *     Type: 'CREDIT'|'FEE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
