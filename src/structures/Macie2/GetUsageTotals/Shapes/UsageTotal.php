<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageTotals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD' $currency
 * @property string $estimatedCost
 * @property 'DATA_INVENTORY_EVALUATION'|'SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_OBJECT_MONITORING' $type
 */
class UsageTotal extends Shape
{
    /**
     * @param array{
     *     currency?: 'USD',
     *     estimatedCost?: string,
     *     type?: 'DATA_INVENTORY_EVALUATION'|'SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_OBJECT_MONITORING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
