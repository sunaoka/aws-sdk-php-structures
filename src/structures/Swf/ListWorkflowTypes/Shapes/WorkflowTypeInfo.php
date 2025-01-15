<?php

namespace Sunaoka\Aws\Structures\Swf\ListWorkflowTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowType $workflowType
 * @property 'REGISTERED'|'DEPRECATED' $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult|null $deprecationDate
 */
class WorkflowTypeInfo extends Shape
{
    /**
     * @param array{
     *     workflowType: WorkflowType,
     *     status: 'REGISTERED'|'DEPRECATED',
     *     description?: string|null,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     deprecationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
