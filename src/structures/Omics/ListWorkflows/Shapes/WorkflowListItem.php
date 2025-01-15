<?php

namespace Sunaoka\Aws\Structures\Omics\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE'|null $status
 * @property 'PRIVATE'|'READY2RUN'|null $type
 * @property string|null $digest
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property array<string, string>|null $metadata
 */
class WorkflowListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     name?: string|null,
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
