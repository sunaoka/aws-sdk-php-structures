<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterArn
 * @property list<ClusterEndpoint> $ClusterEndpoints
 * @property string $Name
 * @property 'PENDING'|'DEPLOYED'|'PENDING_DELETION' $Status
 * @property string $Owner
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string,
     *     ClusterEndpoints?: list<ClusterEndpoint>,
     *     Name?: string,
     *     Status?: 'PENDING'|'DEPLOYED'|'PENDING_DELETION',
     *     Owner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
