<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterArn
 * @property list<ClusterEndpoint>|null $ClusterEndpoints
 * @property string|null $Name
 * @property 'PENDING'|'DEPLOYED'|'PENDING_DELETION'|null $Status
 * @property string|null $Owner
 * @property 'IPV4'|'DUALSTACK'|null $NetworkType
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string|null,
     *     ClusterEndpoints?: list<ClusterEndpoint>|null,
     *     Name?: string|null,
     *     Status?: 'PENDING'|'DEPLOYED'|'PENDING_DELETION'|null,
     *     Owner?: string|null,
     *     NetworkType?: 'IPV4'|'DUALSTACK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
