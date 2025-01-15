<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $terminateJobsOnUpdate
 * @property int<1, 360>|null $jobExecutionTimeoutMinutes
 */
class UpdatePolicy extends Shape
{
    /**
     * @param array{
     *     terminateJobsOnUpdate?: bool|null,
     *     jobExecutionTimeoutMinutes?: int<1, 360>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
