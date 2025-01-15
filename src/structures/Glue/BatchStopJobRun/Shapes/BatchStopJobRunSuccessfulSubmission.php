<?php

namespace Sunaoka\Aws\Structures\Glue\BatchStopJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property string|null $JobRunId
 */
class BatchStopJobRunSuccessfulSubmission extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     JobRunId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
