<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD'|null $currency
 * @property string|null $estimatedCost
 * @property ServiceLimit|null $serviceLimit
 * @property 'DATA_INVENTORY_EVALUATION'|'SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_OBJECT_MONITORING'|null $type
 */
class UsageByAccount extends Shape
{
    /**
     * @param array{
     *     currency?: 'USD'|null,
     *     estimatedCost?: string|null,
     *     serviceLimit?: ServiceLimit|null,
     *     type?: 'DATA_INVENTORY_EVALUATION'|'SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY'|'AUTOMATED_OBJECT_MONITORING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
