<?php

namespace Sunaoka\Aws\Structures\Rds\FailoverDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InterconnectSubnetId
 * @property string|null $TransitGatewayMulticastDomainId
 * @property 'open-read-only'|'mounted'|null $ReplicaMode
 */
class RdsCustomClusterConfiguration extends Shape
{
    /**
     * @param array{
     *     InterconnectSubnetId?: string|null,
     *     TransitGatewayMulticastDomainId?: string|null,
     *     ReplicaMode?: 'open-read-only'|'mounted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
