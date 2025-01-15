<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterTransitGatewayMulticastGroupSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayMulticastDomainId
 * @property list<string>|null $DeregisteredNetworkInterfaceIds
 * @property string|null $GroupIpAddress
 */
class TransitGatewayMulticastDeregisteredGroupSources extends Shape
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string|null,
     *     DeregisteredNetworkInterfaceIds?: list<string>|null,
     *     GroupIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
