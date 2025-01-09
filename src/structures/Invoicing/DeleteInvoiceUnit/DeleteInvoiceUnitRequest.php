<?php

namespace Sunaoka\Aws\Structures\Invoicing\DeleteInvoiceUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InvoiceUnitArn
 */
class DeleteInvoiceUnitRequest extends Request
{
    /**
     * @param array{InvoiceUnitArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
