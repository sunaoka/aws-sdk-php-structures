<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $terminateJobsOnUpdate
 * @property int $jobExecutionTimeoutMinutes
 */
class UpdatePolicy extends Shape
{
    /**
     * @param array{
     *     terminateJobsOnUpdate?: bool,
     *     jobExecutionTimeoutMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
