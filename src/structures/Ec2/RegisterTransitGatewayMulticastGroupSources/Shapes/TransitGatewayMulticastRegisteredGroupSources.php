<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterTransitGatewayMulticastGroupSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayMulticastDomainId
 * @property list<string>|null $RegisteredNetworkInterfaceIds
 * @property string|null $GroupIpAddress
 */
class TransitGatewayMulticastRegisteredGroupSources extends Shape
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string|null,
     *     RegisteredNetworkInterfaceIds?: list<string>|null,
     *     GroupIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
