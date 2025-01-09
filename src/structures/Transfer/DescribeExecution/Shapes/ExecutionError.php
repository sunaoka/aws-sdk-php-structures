<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PERMISSION_DENIED'|'CUSTOM_STEP_FAILED'|'THROTTLED'|'ALREADY_EXISTS'|'NOT_FOUND'|'BAD_REQUEST'|'TIMEOUT'|'INTERNAL_SERVER_ERROR' $Type
 * @property string $Message
 */
class ExecutionError extends Shape
{
    /**
     * @param array{
     *     Type: 'PERMISSION_DENIED'|'CUSTOM_STEP_FAILED'|'THROTTLED'|'ALREADY_EXISTS'|'NOT_FOUND'|'BAD_REQUEST'|'TIMEOUT'|'INTERNAL_SERVER_ERROR',
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
