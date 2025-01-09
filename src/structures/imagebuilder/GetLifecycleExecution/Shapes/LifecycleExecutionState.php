<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecycleExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'PENDING' $status
 * @property string $reason
 */
class LifecycleExecutionState extends Shape
{
    /**
     * @param array{
     *     status?: 'IN_PROGRESS'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'PENDING',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
