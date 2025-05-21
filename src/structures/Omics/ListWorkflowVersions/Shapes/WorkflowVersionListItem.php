<?php

namespace Sunaoka\Aws\Structures\Omics\ListWorkflowVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $workflowId
 * @property string|null $versionName
 * @property string|null $description
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE'|null $status
 * @property 'PRIVATE'|'READY2RUN'|null $type
 * @property string|null $digest
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property array<string, string>|null $metadata
 */
class WorkflowVersionListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     workflowId?: string|null,
     *     versionName?: string|null,
     *     description?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE'|null,
     *     type?: 'PRIVATE'|'READY2RUN'|null,
     *     digest?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
