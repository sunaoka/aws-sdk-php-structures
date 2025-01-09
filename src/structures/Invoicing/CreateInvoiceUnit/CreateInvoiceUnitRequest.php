<?php

namespace Sunaoka\Aws\Structures\Invoicing\CreateInvoiceUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InvoiceReceiver
 * @property string $Description
 * @property bool $TaxInheritanceDisabled
 * @property Shapes\InvoiceUnitRule $Rule
 * @property list<Shapes\ResourceTag> $ResourceTags
 */
class CreateInvoiceUnitRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     InvoiceReceiver: string,
     *     Description?: string,
     *     TaxInheritanceDisabled?: bool,
     *     Rule: Shapes\InvoiceUnitRule,
     *     ResourceTags?: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
