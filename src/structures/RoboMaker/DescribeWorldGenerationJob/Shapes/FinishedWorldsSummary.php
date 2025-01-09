<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $finishedCount
 * @property list<string> $succeededWorlds
 * @property FailureSummary $failureSummary
 */
class FinishedWorldsSummary extends Shape
{
    /**
     * @param array{
     *     finishedCount?: int,
     *     succeededWorlds?: list<string>,
     *     failureSummary?: FailureSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
