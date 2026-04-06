<?php

namespace Sunaoka\Aws\Structures\PCS\GetQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property string $arn
 * @property string $clusterId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|'SUSPENDING'|'SUSPENDED'|'RESUMING' $status
 * @property list<ComputeNodeGroupConfiguration> $computeNodeGroupConfigurations
 * @property QueueSlurmConfiguration|null $slurmConfiguration
 * @property list<ErrorInfo>|null $errorInfo
 */
class Queue extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     id: string,
     *     arn: string,
     *     clusterId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|'SUSPENDING'|'SUSPENDED'|'RESUMING',
     *     computeNodeGroupConfigurations: list<ComputeNodeGroupConfiguration>,
     *     slurmConfiguration?: QueueSlurmConfiguration|null,
     *     errorInfo?: list<ErrorInfo>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
