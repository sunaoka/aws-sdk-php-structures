<?php

namespace Sunaoka\Aws\Structures\Payments\BatchGetFinancialRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvoiceDetails|null $invoiceDetails
 * @property CreditMemoDetails|null $creditMemoDetails
 */
class FinancialRecordDetails extends Shape
{
    /**
     * @param array{
     *     invoiceDetails?: InvoiceDetails|null,
     *     creditMemoDetails?: CreditMemoDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
