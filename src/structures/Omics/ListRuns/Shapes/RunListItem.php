<?php

namespace Sunaoka\Aws\Structures\Omics\ListRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED' $status
 * @property string $workflowId
 * @property string $name
 * @property int $priority
 * @property int $storageCapacity
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $stopTime
 * @property 'STATIC'|'DYNAMIC' $storageType
 */
class RunListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     status?: 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED',
     *     workflowId?: string,
     *     name?: string,
     *     priority?: int,
     *     storageCapacity?: int,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     stopTime?: \Aws\Api\DateTimeResult,
     *     storageType?: 'STATIC'|'DYNAMIC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
