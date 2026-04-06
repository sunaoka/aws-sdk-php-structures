<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoicePDF;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InvoiceId
 */
class GetInvoicePDFRequest extends Request
{
    /**
     * @param array{InvoiceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
