<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceUnits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InvoiceUnitArn
 * @property string|null $InvoiceReceiver
 * @property string|null $Name
 * @property string|null $Description
 * @property bool|null $TaxInheritanceDisabled
 * @property InvoiceUnitRule|null $Rule
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class InvoiceUnit extends Shape
{
    /**
     * @param array{
     *     InvoiceUnitArn?: string|null,
     *     InvoiceReceiver?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     TaxInheritanceDisabled?: bool|null,
     *     Rule?: InvoiceUnitRule|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
