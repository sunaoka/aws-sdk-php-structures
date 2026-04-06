<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $Amount
 * @property string|null $Rate
 */
class DiscountsBreakdownAmount extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Amount?: string|null,
     *     Rate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
