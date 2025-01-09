<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $terminateJobsOnUpdate
 * @property int<1, 360> $jobExecutionTimeoutMinutes
 */
class UpdatePolicy extends Shape
{
    /**
     * @param array{
     *     terminateJobsOnUpdate?: bool,
     *     jobExecutionTimeoutMinutes?: int<1, 360>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
