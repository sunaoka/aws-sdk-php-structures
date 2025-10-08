<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|'SUSPENDING'|'SUSPENDED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property Scheduler $scheduler
 * @property 'SMALL'|'MEDIUM'|'LARGE' $size
 * @property ClusterSlurmConfiguration|null $slurmConfiguration
 * @property Networking $networking
 * @property list<Endpoint>|null $endpoints
 * @property list<ErrorInfo>|null $errorInfo
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     id: string,
     *     arn: string,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|'SUSPENDING'|'SUSPENDED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     scheduler: Scheduler,
     *     size: 'SMALL'|'MEDIUM'|'LARGE',
     *     slurmConfiguration?: ClusterSlurmConfiguration|null,
     *     networking: Networking,
     *     endpoints?: list<Endpoint>|null,
     *     errorInfo?: list<ErrorInfo>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
