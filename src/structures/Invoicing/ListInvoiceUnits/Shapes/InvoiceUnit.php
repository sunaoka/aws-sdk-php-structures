<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceUnits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InvoiceUnitArn
 * @property string $InvoiceReceiver
 * @property string $Name
 * @property string $Description
 * @property bool $TaxInheritanceDisabled
 * @property InvoiceUnitRule $Rule
 * @property \Aws\Api\DateTimeResult $LastModified
 */
class InvoiceUnit extends Shape
{
    /**
     * @param array{
     *     InvoiceUnitArn?: string,
     *     InvoiceReceiver?: string,
     *     Name?: string,
     *     Description?: string,
     *     TaxInheritanceDisabled?: bool,
     *     Rule?: InvoiceUnitRule,
     *     LastModified?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
