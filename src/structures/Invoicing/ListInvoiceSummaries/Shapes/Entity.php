<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InvoicingEntity
 */
class Entity extends Shape
{
    /**
     * @param array{InvoicingEntity?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
