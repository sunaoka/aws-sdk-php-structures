<?php

namespace Sunaoka\Aws\Structures\Invoicing\UpdateInvoiceUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InvoiceUnitArn
 * @property string $Description
 * @property bool $TaxInheritanceDisabled
 * @property Shapes\InvoiceUnitRule $Rule
 */
class UpdateInvoiceUnitRequest extends Request
{
    /**
     * @param array{
     *     InvoiceUnitArn: string,
     *     Description?: string,
     *     TaxInheritanceDisabled?: bool,
     *     Rule?: Shapes\InvoiceUnitRule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
