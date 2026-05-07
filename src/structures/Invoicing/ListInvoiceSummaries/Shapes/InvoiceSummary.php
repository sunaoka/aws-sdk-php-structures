<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $InvoiceId
 * @property \Aws\Api\DateTimeResult|null $IssuedDate
 * @property \Aws\Api\DateTimeResult|null $DueDate
 * @property list<string>|null $BillSourceAccounts
 * @property int|null $BillSourceAccountsTotalCount
 * @property 'SELLER'|'RESELLER'|'BUYER'|null $ReceiverRole
 * @property Entity|null $Entity
 * @property BillingPeriod|null $BillingPeriod
 * @property 'ONE_TIME'|'RECURRING'|null $InvoiceFrequency
 * @property 'ANNIVERSARY'|'PURCHASE'|'REFUND'|null $BillType
 * @property 'INVOICE'|'CREDIT_MEMO'|'PAYMENT_RECEIPT'|null $InvoiceType
 * @property string|null $CommercialInvoiceId
 * @property string|null $OriginalInvoiceId
 * @property string|null $PurchaseOrderNumber
 * @property 'DELIVERED'|'NOT_DELIVERED'|null $EinvoiceDeliveryStatus
 * @property 'ISSUED'|'CANCELLED'|null $TaxAuthorityStatus
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
     *     BillSourceAccounts?: list<string>|null,
     *     BillSourceAccountsTotalCount?: int|null,
     *     ReceiverRole?: 'SELLER'|'RESELLER'|'BUYER'|null,
     *     Entity?: Entity|null,
     *     BillingPeriod?: BillingPeriod|null,
     *     InvoiceFrequency?: 'ONE_TIME'|'RECURRING'|null,
     *     BillType?: 'ANNIVERSARY'|'PURCHASE'|'REFUND'|null,
     *     InvoiceType?: 'INVOICE'|'CREDIT_MEMO'|'PAYMENT_RECEIPT'|null,
     *     CommercialInvoiceId?: string|null,
     *     OriginalInvoiceId?: string|null,
     *     PurchaseOrderNumber?: string|null,
     *     EinvoiceDeliveryStatus?: 'DELIVERED'|'NOT_DELIVERED'|null,
     *     TaxAuthorityStatus?: 'ISSUED'|'CANCELLED'|null,
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
