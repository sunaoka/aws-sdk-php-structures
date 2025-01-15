<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetArn
 * @property string|null $Endpoint
 * @property string|null $TrackedClusterId
 * @property string|null $RdsResourceId
 * @property int|null $Port
 * @property 'RDS_INSTANCE'|'RDS_SERVERLESS_ENDPOINT'|'TRACKED_CLUSTER'|null $Type
 * @property 'READ_WRITE'|'READ_ONLY'|'UNKNOWN'|null $Role
 * @property TargetHealth|null $TargetHealth
 */
class DBProxyTarget extends Shape
{
    /**
     * @param array{
     *     TargetArn?: string|null,
     *     Endpoint?: string|null,
     *     TrackedClusterId?: string|null,
     *     RdsResourceId?: string|null,
     *     Port?: int|null,
     *     Type?: 'RDS_INSTANCE'|'RDS_SERVERLESS_ENDPOINT'|'TRACKED_CLUSTER'|null,
     *     Role?: 'READ_WRITE'|'READ_ONLY'|'UNKNOWN'|null,
     *     TargetHealth?: TargetHealth|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
