<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoicePDF\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InvoiceId
 * @property string|null $DocumentUrl
 * @property \Aws\Api\DateTimeResult|null $DocumentUrlExpirationDate
 * @property list<SupplementalDocument>|null $SupplementalDocuments
 */
class InvoicePDF extends Shape
{
    /**
     * @param array{
     *     InvoiceId?: string|null,
     *     DocumentUrl?: string|null,
     *     DocumentUrlExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     SupplementalDocuments?: list<SupplementalDocument>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
