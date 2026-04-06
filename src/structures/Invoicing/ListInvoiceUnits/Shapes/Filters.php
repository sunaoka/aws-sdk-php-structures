<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceUnits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Names
 * @property list<string>|null $InvoiceReceivers
 * @property list<string>|null $Accounts
 */
class Filters extends Shape
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     InvoiceReceivers?: list<string>|null,
     *     Accounts?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
