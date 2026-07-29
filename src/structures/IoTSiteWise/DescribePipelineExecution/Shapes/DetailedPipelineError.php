<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|'EXECUTION_ERROR'|'TIMED_OUT' $code
 * @property string $message
 */
class DetailedPipelineError extends Shape
{
    /**
     * @param array{
     *     code: 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|'EXECUTION_ERROR'|'TIMED_OUT',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
