<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceUnits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Names
 * @property list<string> $InvoiceReceivers
 * @property list<string> $Accounts
 */
class Filters extends Shape
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     InvoiceReceivers?: list<string>,
     *     Accounts?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
