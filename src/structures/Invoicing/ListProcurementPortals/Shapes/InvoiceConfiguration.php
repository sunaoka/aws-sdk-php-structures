<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListProcurementPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_CLOUD_INVOICE'|'AWS_CLOUD_CREDIT_MEMO'|'AWS_MARKETPLACE_INVOICE'|'AWS_MARKETPLACE_CREDIT_MEMO'|'AWS_REQUEST_FOR_PAYMENT'>|null $DocumentTypes
 * @property list<'INVOICE_PDF'|'RFP_PDF'>|null $AttachmentTypes
 */
class InvoiceConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentTypes?: list<'AWS_CLOUD_INVOICE'|'AWS_CLOUD_CREDIT_MEMO'|'AWS_MARKETPLACE_INVOICE'|'AWS_MARKETPLACE_CREDIT_MEMO'|'AWS_REQUEST_FOR_PAYMENT'>|null,
     *     AttachmentTypes?: list<'INVOICE_PDF'|'RFP_PDF'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
