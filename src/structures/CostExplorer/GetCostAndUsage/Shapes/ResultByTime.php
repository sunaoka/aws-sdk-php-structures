<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval|null $TimePeriod
 * @property array<string, MetricValue>|null $Total
 * @property list<Group>|null $Groups
 * @property bool|null $Estimated
 */
class ResultByTime extends Shape
{
    /**
     * @param array{
     *     TimePeriod?: DateInterval|null,
     *     Total?: array<string, MetricValue>|null,
     *     Groups?: list<Group>|null,
     *     Estimated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
