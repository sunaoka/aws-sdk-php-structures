<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageWithResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Keys
 * @property array<string, MetricValue> $Metrics
 */
class Group extends Shape
{
    /**
     * @param array{
     *     Keys?: list<string>,
     *     Metrics?: array<string, MetricValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
