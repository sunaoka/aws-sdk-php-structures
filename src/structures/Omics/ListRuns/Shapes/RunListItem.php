<?php

namespace Sunaoka\Aws\Structures\Omics\ListRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED'|null $status
 * @property string|null $workflowId
 * @property string|null $name
 * @property int<0, 100000>|null $priority
 * @property int<0, 100000>|null $storageCapacity
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $stopTime
 * @property 'STATIC'|'DYNAMIC'|null $storageType
 * @property string|null $workflowVersionName
 */
class RunListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     status?: 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED'|null,
     *     workflowId?: string|null,
     *     name?: string|null,
     *     priority?: int<0, 100000>|null,
     *     storageCapacity?: int<0, 100000>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     stopTime?: \Aws\Api\DateTimeResult|null,
     *     storageType?: 'STATIC'|'DYNAMIC'|null,
     *     workflowVersionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
