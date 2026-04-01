<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementInvoiceLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agreementId
 * @property string|null $invoiceId
 * @property PricingCurrencyAmount|null $pricingCurrencyAmount
 * @property InvoiceBillingPeriod|null $invoiceBillingPeriod
 * @property \Aws\Api\DateTimeResult|null $issuedTime
 * @property 'INVOICE'|'CREDIT_MEMO'|null $invoiceType
 * @property InvoicingEntity|null $invoicingEntity
 */
class AgreementInvoiceLineItemGroupSummary extends Shape
{
    /**
     * @param array{
     *     agreementId?: string|null,
     *     invoiceId?: string|null,
     *     pricingCurrencyAmount?: PricingCurrencyAmount|null,
     *     invoiceBillingPeriod?: InvoiceBillingPeriod|null,
     *     issuedTime?: \Aws\Api\DateTimeResult|null,
     *     invoiceType?: 'INVOICE'|'CREDIT_MEMO'|null,
     *     invoicingEntity?: InvoicingEntity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
