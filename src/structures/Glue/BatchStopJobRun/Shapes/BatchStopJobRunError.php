<?php

namespace Sunaoka\Aws\Structures\Glue\BatchStopJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property string|null $JobRunId
 * @property ErrorDetail|null $ErrorDetail
 */
class BatchStopJobRunError extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     JobRunId?: string|null,
     *     ErrorDetail?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
