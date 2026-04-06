<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoiceUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InvoiceUnitArn
 * @property \Aws\Api\DateTimeResult|null $AsOf
 */
class GetInvoiceUnitRequest extends Request
{
    /**
     * @param array{
     *     InvoiceUnitArn: string,
     *     AsOf?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
