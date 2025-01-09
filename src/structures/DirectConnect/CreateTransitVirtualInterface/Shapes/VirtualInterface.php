<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateTransitVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ownerAccount
 * @property string $virtualInterfaceId
 * @property string $location
 * @property string $connectionId
 * @property string $virtualInterfaceType
 * @property string $virtualInterfaceName
 * @property int $vlan
 * @property int $asn
 * @property int $amazonSideAsn
 * @property string $authKey
 * @property string $amazonAddress
 * @property string $customerAddress
 * @property 'ipv4'|'ipv6' $addressFamily
 * @property 'confirming'|'verifying'|'pending'|'available'|'down'|'deleting'|'deleted'|'rejected'|'unknown' $virtualInterfaceState
 * @property string $customerRouterConfig
 * @property int $mtu
 * @property bool $jumboFrameCapable
 * @property string $virtualGatewayId
 * @property string $directConnectGatewayId
 * @property list<RouteFilterPrefix> $routeFilterPrefixes
 * @property list<BGPPeer> $bgpPeers
 * @property string $region
 * @property string $awsDeviceV2
 * @property string $awsLogicalDeviceId
 * @property list<Tag> $tags
 * @property bool $siteLinkEnabled
 */
class VirtualInterface extends Shape
{
    /**
     * @param array{
     *     ownerAccount?: string,
     *     virtualInterfaceId?: string,
     *     location?: string,
     *     connectionId?: string,
     *     virtualInterfaceType?: string,
     *     virtualInterfaceName?: string,
     *     vlan?: int,
     *     asn?: int,
     *     amazonSideAsn?: int,
     *     authKey?: string,
     *     amazonAddress?: string,
     *     customerAddress?: string,
     *     addressFamily?: 'ipv4'|'ipv6',
     *     virtualInterfaceState?: 'confirming'|'verifying'|'pending'|'available'|'down'|'deleting'|'deleted'|'rejected'|'unknown',
     *     customerRouterConfig?: string,
     *     mtu?: int,
     *     jumboFrameCapable?: bool,
     *     virtualGatewayId?: string,
     *     directConnectGatewayId?: string,
     *     routeFilterPrefixes?: list<RouteFilterPrefix>,
     *     bgpPeers?: list<BGPPeer>,
     *     region?: string,
     *     awsDeviceV2?: string,
     *     awsLogicalDeviceId?: string,
     *     tags?: list<Tag>,
     *     siteLinkEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
