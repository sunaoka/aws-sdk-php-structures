<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateVirtualInterface;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\RouteFilterPrefix>|null $routeFilterPrefixes
 * @property list<Shapes\BGPPeer>|null $bgpPeers
 * @property string|null $region
 * @property string|null $awsDeviceV2
 * @property string|null $awsLogicalDeviceId
 * @property list<Shapes\Tag>|null $tags
 * @property bool|null $siteLinkEnabled
 */
class AssociateVirtualInterfaceResponse extends Response
{
}
