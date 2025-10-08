<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $InvoiceId
 * @property \Aws\Api\DateTimeResult|null $IssuedDate
 * @property \Aws\Api\DateTimeResult|null $DueDate
 * @property Entity|null $Entity
 * @property BillingPeriod|null $BillingPeriod
 * @property 'INVOICE'|'CREDIT_MEMO'|null $InvoiceType
 * @property string|null $OriginalInvoiceId
 * @property string|null $PurchaseOrderNumber
 * @property InvoiceCurrencyAmount|null $BaseCurrencyAmount
 * @property InvoiceCurrencyAmount|null $TaxCurrencyAmount
 * @property InvoiceCurrencyAmount|null $PaymentCurrencyAmount
 */
class InvoiceSummary extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     InvoiceId?: string|null,
     *     IssuedDate?: \Aws\Api\DateTimeResult|null,
     *     DueDate?: \Aws\Api\DateTimeResult|null,
     *     Entity?: Entity|null,
     *     BillingPeriod?: BillingPeriod|null,
     *     InvoiceType?: 'INVOICE'|'CREDIT_MEMO'|null,
     *     OriginalInvoiceId?: string|null,
     *     PurchaseOrderNumber?: string|null,
     *     BaseCurrencyAmount?: InvoiceCurrencyAmount|null,
     *     TaxCurrencyAmount?: InvoiceCurrencyAmount|null,
     *     PaymentCurrencyAmount?: InvoiceCurrencyAmount|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
