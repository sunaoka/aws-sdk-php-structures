<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableId
 * @property string $LocalGatewayVirtualInterfaceGroupId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociationRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId: string,
     *     LocalGatewayVirtualInterfaceGroupId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
