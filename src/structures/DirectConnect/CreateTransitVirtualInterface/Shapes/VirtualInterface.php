<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateTransitVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ownerAccount
 * @property string|null $virtualInterfaceId
 * @property string|null $location
 * @property string|null $connectionId
 * @property string|null $virtualInterfaceType
 * @property string|null $virtualInterfaceName
 * @property int|null $vlan
 * @property int|null $asn
 * @property int|null $amazonSideAsn
 * @property string|null $authKey
 * @property string|null $amazonAddress
 * @property string|null $customerAddress
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property 'confirming'|'verifying'|'pending'|'available'|'down'|'deleting'|'deleted'|'rejected'|'unknown'|null $virtualInterfaceState
 * @property string|null $customerRouterConfig
 * @property int|null $mtu
 * @property bool|null $jumboFrameCapable
 * @property string|null $virtualGatewayId
 * @property string|null $directConnectGatewayId
 * @property list<RouteFilterPrefix>|null $routeFilterPrefixes
 * @property list<BGPPeer>|null $bgpPeers
 * @property string|null $region
 * @property string|null $awsDeviceV2
 * @property string|null $awsLogicalDeviceId
 * @property list<Tag>|null $tags
 * @property bool|null $siteLinkEnabled
 */
class VirtualInterface extends Shape
{
    /**
     * @param array{
     *     ownerAccount?: string|null,
     *     virtualInterfaceId?: string|null,
     *     location?: string|null,
     *     connectionId?: string|null,
     *     virtualInterfaceType?: string|null,
     *     virtualInterfaceName?: string|null,
     *     vlan?: int|null,
     *     asn?: int|null,
     *     amazonSideAsn?: int|null,
     *     authKey?: string|null,
     *     amazonAddress?: string|null,
     *     customerAddress?: string|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     virtualInterfaceState?: 'confirming'|'verifying'|'pending'|'available'|'down'|'deleting'|'deleted'|'rejected'|'unknown'|null,
     *     customerRouterConfig?: string|null,
     *     mtu?: int|null,
     *     jumboFrameCapable?: bool|null,
     *     virtualGatewayId?: string|null,
     *     directConnectGatewayId?: string|null,
     *     routeFilterPrefixes?: list<RouteFilterPrefix>|null,
     *     bgpPeers?: list<BGPPeer>|null,
     *     region?: string|null,
     *     awsDeviceV2?: string|null,
     *     awsLogicalDeviceId?: string|null,
     *     tags?: list<Tag>|null,
     *     siteLinkEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
