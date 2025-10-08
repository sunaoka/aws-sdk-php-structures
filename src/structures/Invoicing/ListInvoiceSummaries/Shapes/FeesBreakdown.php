<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FeesBreakdownAmount>|null $Breakdown
 * @property string|null $TotalAmount
 */
class FeesBreakdown extends Shape
{
    /**
     * @param array{
     *     Breakdown?: list<FeesBreakdownAmount>|null,
     *     TotalAmount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
