<?php

namespace Sunaoka\Aws\Structures\Invoicing\UpdateInvoiceUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InvoiceUnitArn
 * @property string|null $Description
 * @property bool|null $TaxInheritanceDisabled
 * @property Shapes\InvoiceUnitRule|null $Rule
 * @property string|null $ClientToken
 */
class UpdateInvoiceUnitRequest extends Request
{
    /**
     * @param array{
     *     InvoiceUnitArn: string,
     *     Description?: string|null,
     *     TaxInheritanceDisabled?: bool|null,
     *     Rule?: Shapes\InvoiceUnitRule|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
