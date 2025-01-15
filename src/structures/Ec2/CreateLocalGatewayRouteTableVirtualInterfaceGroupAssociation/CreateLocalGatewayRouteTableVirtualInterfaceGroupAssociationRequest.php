<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableId
 * @property string $LocalGatewayVirtualInterfaceGroupId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociationRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId: string,
     *     LocalGatewayVirtualInterfaceGroupId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
