<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomLineItemFlatChargeDetails|null $Flat
 * @property CustomLineItemPercentageChargeDetails|null $Percentage
 * @property 'CREDIT'|'FEE' $Type
 * @property list<LineItemFilter>|null $LineItemFilters
 */
class CustomLineItemChargeDetails extends Shape
{
    /**
     * @param array{
     *     Flat?: CustomLineItemFlatChargeDetails|null,
     *     Percentage?: CustomLineItemPercentageChargeDetails|null,
     *     Type: 'CREDIT'|'FEE',
     *     LineItemFilters?: list<LineItemFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
