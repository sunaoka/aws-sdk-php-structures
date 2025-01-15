<?php

namespace Sunaoka\Aws\Structures\Invoicing\CreateInvoiceUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InvoiceReceiver
 * @property string|null $Description
 * @property bool|null $TaxInheritanceDisabled
 * @property Shapes\InvoiceUnitRule $Rule
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 */
class CreateInvoiceUnitRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     InvoiceReceiver: string,
     *     Description?: string|null,
     *     TaxInheritanceDisabled?: bool|null,
     *     Rule: Shapes\InvoiceUnitRule,
     *     ResourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
