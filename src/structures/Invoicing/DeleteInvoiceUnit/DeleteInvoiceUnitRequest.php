<?php

namespace Sunaoka\Aws\Structures\Invoicing\DeleteInvoiceUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InvoiceUnitArn
 * @property string|null $ClientToken
 */
class DeleteInvoiceUnitRequest extends Request
{
    /**
     * @param array{
     *     InvoiceUnitArn: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
