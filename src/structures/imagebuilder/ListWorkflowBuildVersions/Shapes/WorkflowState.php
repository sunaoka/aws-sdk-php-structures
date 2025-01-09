<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPRECATED' $status
 * @property string $reason
 */
class WorkflowState extends Shape
{
    /**
     * @param array{
     *     status?: 'DEPRECATED',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
