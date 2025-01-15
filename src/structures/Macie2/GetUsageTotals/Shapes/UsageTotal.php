<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageTotals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD'|null $currency
 * @property string|null $estimatedCost
 * @property 'DATA_INVENTORY_EVALUATION'|'SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_OBJECT_MONITORING'|null $type
 */
class UsageTotal extends Shape
{
    /**
     * @param array{
     *     currency?: 'USD'|null,
     *     estimatedCost?: string|null,
     *     type?: 'DATA_INVENTORY_EVALUATION'|'SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_OBJECT_MONITORING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
