<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TotalAmount
 * @property string|null $TotalAmountBeforeTax
 * @property string|null $CurrencyCode
 * @property AmountBreakdown|null $AmountBreakdown
 * @property CurrencyExchangeDetails|null $CurrencyExchangeDetails
 */
class InvoiceCurrencyAmount extends Shape
{
    /**
     * @param array{
     *     TotalAmount?: string|null,
     *     TotalAmountBeforeTax?: string|null,
     *     CurrencyCode?: string|null,
     *     AmountBreakdown?: AmountBreakdown|null,
     *     CurrencyExchangeDetails?: CurrencyExchangeDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
