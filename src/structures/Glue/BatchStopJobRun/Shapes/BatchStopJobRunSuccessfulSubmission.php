<?php

namespace Sunaoka\Aws\Structures\Glue\BatchStopJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property string $JobRunId
 */
class BatchStopJobRunSuccessfulSubmission extends Shape
{
    /**
     * @param array{
     *     JobName?: string,
     *     JobRunId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
