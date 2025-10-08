<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DiscountsBreakdownAmount>|null $Breakdown
 * @property string|null $TotalAmount
 */
class DiscountsBreakdown extends Shape
{
    /**
     * @param array{
     *     Breakdown?: list<DiscountsBreakdownAmount>|null,
     *     TotalAmount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
