<?php

namespace Sunaoka\Aws\Structures\Rds\PromoteReadReplicaDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InterconnectSubnetId
 * @property string $TransitGatewayMulticastDomainId
 * @property 'open-read-only'|'mounted' $ReplicaMode
 */
class RdsCustomClusterConfiguration extends Shape
{
    /**
     * @param array{
     *     InterconnectSubnetId?: string,
     *     TransitGatewayMulticastDomainId?: string,
     *     ReplicaMode?: 'open-read-only'|'mounted'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
