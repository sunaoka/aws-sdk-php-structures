<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Keys
 * @property array<string, MetricValue>|null $Metrics
 */
class Group extends Shape
{
    /**
     * @param array{
     *     Keys?: list<string>|null,
     *     Metrics?: array<string, MetricValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
