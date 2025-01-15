<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalFailureCount
 * @property list<WorldFailure>|null $failures
 */
class FailureSummary extends Shape
{
    /**
     * @param array{
     *     totalFailureCount?: int|null,
     *     failures?: list<WorldFailure>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
