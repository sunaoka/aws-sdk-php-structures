<?php

namespace Sunaoka\Aws\Structures\Invoicing\UpdateInvoiceUnit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $LinkedAccounts
 */
class InvoiceUnitRule extends Shape
{
    /**
     * @param array{LinkedAccounts?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
