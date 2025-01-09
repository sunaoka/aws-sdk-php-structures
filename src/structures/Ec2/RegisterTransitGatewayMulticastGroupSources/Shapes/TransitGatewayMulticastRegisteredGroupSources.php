<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterTransitGatewayMulticastGroupSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property list<string> $RegisteredNetworkInterfaceIds
 * @property string $GroupIpAddress
 */
class TransitGatewayMulticastRegisteredGroupSources extends Shape
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string,
     *     RegisteredNetworkInterfaceIds?: list<string>,
     *     GroupIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
