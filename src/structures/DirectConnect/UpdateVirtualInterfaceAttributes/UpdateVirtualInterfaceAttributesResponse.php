<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateVirtualInterfaceAttributes;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\RouteFilterPrefix> $routeFilterPrefixes
 * @property list<Shapes\BGPPeer> $bgpPeers
 * @property string $region
 * @property string $awsDeviceV2
 * @property string $awsLogicalDeviceId
 * @property list<Shapes\Tag> $tags
 * @property bool $siteLinkEnabled
 */
class UpdateVirtualInterfaceAttributesResponse extends Response
{
}
