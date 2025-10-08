<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaxesBreakdownAmount>|null $Breakdown
 * @property string|null $TotalAmount
 */
class TaxesBreakdown extends Shape
{
    /**
     * @param array{
     *     Breakdown?: list<TaxesBreakdownAmount>|null,
     *     TotalAmount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
