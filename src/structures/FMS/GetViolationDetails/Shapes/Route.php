<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPV4'|'IPV6'|'PREFIX_LIST' $DestinationType
 * @property 'GATEWAY'|'CARRIER_GATEWAY'|'INSTANCE'|'LOCAL_GATEWAY'|'NAT_GATEWAY'|'NETWORK_INTERFACE'|'VPC_ENDPOINT'|'VPC_PEERING_CONNECTION'|'EGRESS_ONLY_INTERNET_GATEWAY'|'TRANSIT_GATEWAY' $TargetType
 * @property string $Destination
 * @property string $Target
 */
class Route extends Shape
{
    /**
     * @param array{
     *     DestinationType?: 'IPV4'|'IPV6'|'PREFIX_LIST',
     *     TargetType?: 'GATEWAY'|'CARRIER_GATEWAY'|'INSTANCE'|'LOCAL_GATEWAY'|'NAT_GATEWAY'|'NETWORK_INTERFACE'|'VPC_ENDPOINT'|'VPC_PEERING_CONNECTION'|'EGRESS_ONLY_INTERNET_GATEWAY'|'TRANSIT_GATEWAY',
     *     Destination?: string,
     *     Target?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
