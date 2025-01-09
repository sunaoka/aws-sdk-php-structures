<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalFailureCount
 * @property list<WorldFailure> $failures
 */
class FailureSummary extends Shape
{
    /**
     * @param array{
     *     totalFailureCount?: int,
     *     failures?: list<WorldFailure>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
