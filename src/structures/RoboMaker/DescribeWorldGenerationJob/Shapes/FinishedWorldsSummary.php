<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $finishedCount
 * @property list<string>|null $succeededWorlds
 * @property FailureSummary|null $failureSummary
 */
class FinishedWorldsSummary extends Shape
{
    /**
     * @param array{
     *     finishedCount?: int|null,
     *     succeededWorlds?: list<string>|null,
     *     failureSummary?: FailureSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
