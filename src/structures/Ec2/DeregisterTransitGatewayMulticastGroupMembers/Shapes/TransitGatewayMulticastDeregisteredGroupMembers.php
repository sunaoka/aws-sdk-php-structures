<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterTransitGatewayMulticastGroupMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property list<string> $DeregisteredNetworkInterfaceIds
 * @property string $GroupIpAddress
 */
class TransitGatewayMulticastDeregisteredGroupMembers extends Shape
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string,
     *     DeregisteredNetworkInterfaceIds?: list<string>,
     *     GroupIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
