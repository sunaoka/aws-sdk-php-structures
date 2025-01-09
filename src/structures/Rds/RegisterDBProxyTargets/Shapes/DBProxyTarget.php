<?php

namespace Sunaoka\Aws\Structures\Rds\RegisterDBProxyTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetArn
 * @property string $Endpoint
 * @property string $TrackedClusterId
 * @property string $RdsResourceId
 * @property int $Port
 * @property 'RDS_INSTANCE'|'RDS_SERVERLESS_ENDPOINT'|'TRACKED_CLUSTER' $Type
 * @property 'READ_WRITE'|'READ_ONLY'|'UNKNOWN' $Role
 * @property TargetHealth $TargetHealth
 */
class DBProxyTarget extends Shape
{
    /**
     * @param array{
     *     TargetArn?: string,
     *     Endpoint?: string,
     *     TrackedClusterId?: string,
     *     RdsResourceId?: string,
     *     Port?: int,
     *     Type?: 'RDS_INSTANCE'|'RDS_SERVERLESS_ENDPOINT'|'TRACKED_CLUSTER',
     *     Role?: 'READ_WRITE'|'READ_ONLY'|'UNKNOWN',
     *     TargetHealth?: TargetHealth
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
