<?php

namespace Sunaoka\Aws\Structures\Omics\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE' $status
 * @property 'PRIVATE'|'READY2RUN' $type
 * @property string $digest
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property array<string, string> $metadata
 */
class WorkflowListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     name?: string,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE',
     *     type?: 'PRIVATE'|'READY2RUN',
     *     digest?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     metadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
