<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoiceUnit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $LinkedAccounts
 * @property list<string>|null $BillSourceAccounts
 */
class InvoiceUnitRule extends Shape
{
    /**
     * @param array{
     *     LinkedAccounts?: list<string>|null,
     *     BillSourceAccounts?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
