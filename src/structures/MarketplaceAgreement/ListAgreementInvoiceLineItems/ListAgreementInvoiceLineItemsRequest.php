<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementInvoiceLineItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 * @property 'INVOICE_ID' $groupBy
 * @property string|null $invoiceId
 * @property 'INVOICE'|'CREDIT_MEMO'|null $invoiceType
 * @property Shapes\InvoiceBillingPeriod|null $invoiceBillingPeriod
 * @property \Aws\Api\DateTimeResult|null $beforeIssuedTime
 * @property \Aws\Api\DateTimeResult|null $afterIssuedTime
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgreementInvoiceLineItemsRequest extends Request
{
    /**
     * @param array{
     *     agreementId: string,
     *     groupBy: 'INVOICE_ID',
     *     invoiceId?: string|null,
     *     invoiceType?: 'INVOICE'|'CREDIT_MEMO'|null,
     *     invoiceBillingPeriod?: Shapes\InvoiceBillingPeriod|null,
     *     beforeIssuedTime?: \Aws\Api\DateTimeResult|null,
     *     afterIssuedTime?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
