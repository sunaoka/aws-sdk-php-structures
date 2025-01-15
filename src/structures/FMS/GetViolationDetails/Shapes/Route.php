<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPV4'|'IPV6'|'PREFIX_LIST'|null $DestinationType
 * @property 'GATEWAY'|'CARRIER_GATEWAY'|'INSTANCE'|'LOCAL_GATEWAY'|'NAT_GATEWAY'|'NETWORK_INTERFACE'|'VPC_ENDPOINT'|'VPC_PEERING_CONNECTION'|'EGRESS_ONLY_INTERNET_GATEWAY'|'TRANSIT_GATEWAY'|null $TargetType
 * @property string|null $Destination
 * @property string|null $Target
 */
class Route extends Shape
{
    /**
     * @param array{
     *     DestinationType?: 'IPV4'|'IPV6'|'PREFIX_LIST'|null,
     *     TargetType?: 'GATEWAY'|'CARRIER_GATEWAY'|'INSTANCE'|'LOCAL_GATEWAY'|'NAT_GATEWAY'|'NETWORK_INTERFACE'|'VPC_ENDPOINT'|'VPC_PEERING_CONNECTION'|'EGRESS_ONLY_INTERNET_GATEWAY'|'TRANSIT_GATEWAY'|null,
     *     Destination?: string|null,
     *     Target?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
