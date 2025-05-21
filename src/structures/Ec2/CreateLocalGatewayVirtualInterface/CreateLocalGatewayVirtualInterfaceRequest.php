<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayVirtualInterfaceGroupId
 * @property string $OutpostLagId
 * @property int $Vlan
 * @property string $LocalAddress
 * @property string $PeerAddress
 * @property int|null $PeerBgpAsn
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property int|null $PeerBgpAsnExtended
 */
class CreateLocalGatewayVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceGroupId: string,
     *     OutpostLagId: string,
     *     Vlan: int,
     *     LocalAddress: string,
     *     PeerAddress: string,
     *     PeerBgpAsn?: int|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     PeerBgpAsnExtended?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
