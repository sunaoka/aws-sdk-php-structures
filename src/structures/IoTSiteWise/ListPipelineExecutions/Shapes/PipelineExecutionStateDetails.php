<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|'EXECUTION_ERROR'|'TIMED_OUT'|null $code
 * @property string $message
 * @property list<DetailedPipelineError>|null $details
 */
class PipelineExecutionStateDetails extends Shape
{
    /**
     * @param array{
     *     code?: 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|'EXECUTION_ERROR'|'TIMED_OUT'|null,
     *     message: string,
     *     details?: list<DetailedPipelineError>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
