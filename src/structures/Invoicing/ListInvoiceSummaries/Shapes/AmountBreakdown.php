<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubTotalAmount
 * @property DiscountsBreakdown|null $Discounts
 * @property TaxesBreakdown|null $Taxes
 * @property FeesBreakdown|null $Fees
 */
class AmountBreakdown extends Shape
{
    /**
     * @param array{
     *     SubTotalAmount?: string|null,
     *     Discounts?: DiscountsBreakdown|null,
     *     Taxes?: TaxesBreakdown|null,
     *     Fees?: FeesBreakdown|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
