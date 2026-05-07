<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoicePDF\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GOVERNMENT_INVOICE'|'TAX_E_INVOICE'|'PAYMENT_RECEIPT'|'SUPPLEMENT'|null $DocumentType
 * @property string|null $DocumentId
 * @property string|null $DocumentUrl
 * @property \Aws\Api\DateTimeResult|null $DocumentUrlExpirationDate
 */
class SupplementalDocument extends Shape
{
    /**
     * @param array{
     *     DocumentType?: 'GOVERNMENT_INVOICE'|'TAX_E_INVOICE'|'PAYMENT_RECEIPT'|'SUPPLEMENT'|null,
     *     DocumentId?: string|null,
     *     DocumentUrl?: string|null,
     *     DocumentUrlExpirationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
