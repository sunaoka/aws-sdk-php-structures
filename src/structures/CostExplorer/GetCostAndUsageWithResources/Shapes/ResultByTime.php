<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageWithResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval $TimePeriod
 * @property array<string, MetricValue> $Total
 * @property list<Group> $Groups
 * @property bool $Estimated
 */
class ResultByTime extends Shape
{
    /**
     * @param array{
     *     TimePeriod?: DateInterval,
     *     Total?: array<string, MetricValue>,
     *     Groups?: list<Group>,
     *     Estimated?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
