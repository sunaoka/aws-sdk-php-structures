<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'IN_PROGRESS'|'SKIPPED'|'SUCCESS' $status
 * @property string $reason
 */
class LifecycleExecutionResourceState extends Shape
{
    /**
     * @param array{
     *     status?: 'FAILED'|'IN_PROGRESS'|'SKIPPED'|'SUCCESS',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
