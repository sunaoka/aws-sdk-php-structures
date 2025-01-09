<?php

namespace Sunaoka\Aws\Structures\Swf\ListWorkflowTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowType $workflowType
 * @property 'REGISTERED'|'DEPRECATED' $status
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $deprecationDate
 */
class WorkflowTypeInfo extends Shape
{
    /**
     * @param array{
     *     workflowType: WorkflowType,
     *     status: 'REGISTERED'|'DEPRECATED',
     *     description?: string,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     deprecationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
