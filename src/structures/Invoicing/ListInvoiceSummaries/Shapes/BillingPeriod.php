<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 12> $Month
 * @property int<2005, 2050> $Year
 */
class BillingPeriod extends Shape
{
    /**
     * @param array{
     *     Month: int<1, 12>,
     *     Year: int<2005, 2050>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
