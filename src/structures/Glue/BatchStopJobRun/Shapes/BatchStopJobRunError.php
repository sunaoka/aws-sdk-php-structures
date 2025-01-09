<?php

namespace Sunaoka\Aws\Structures\Glue\BatchStopJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property string $JobRunId
 * @property ErrorDetail $ErrorDetail
 */
class BatchStopJobRunError extends Shape
{
    /**
     * @param array{
     *     JobName?: string,
     *     JobRunId?: string,
     *     ErrorDetail?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
