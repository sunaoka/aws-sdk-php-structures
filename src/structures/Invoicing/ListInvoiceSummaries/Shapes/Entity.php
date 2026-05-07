<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InvoicingEntity
 * @property 'AWS'|'AWS_MARKETPLACE'|null $BillingEntity
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     InvoicingEntity?: string|null,
     *     BillingEntity?: 'AWS'|'AWS_MARKETPLACE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
