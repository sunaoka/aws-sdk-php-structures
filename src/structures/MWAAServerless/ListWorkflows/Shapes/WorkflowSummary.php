<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkflowArn
 * @property string|null $WorkflowVersion
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property 'READY'|'DELETING'|null $WorkflowStatus
 * @property string|null $TriggerMode
 */
class WorkflowSummary extends Shape
{
    /**
     * @param array{
     *     WorkflowArn: string,
     *     WorkflowVersion?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     WorkflowStatus?: 'READY'|'DELETING'|null,
     *     TriggerMode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
