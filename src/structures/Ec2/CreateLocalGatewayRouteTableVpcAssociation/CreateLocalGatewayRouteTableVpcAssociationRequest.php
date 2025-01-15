<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTableVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableId
 * @property string $VpcId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateLocalGatewayRouteTableVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId: string,
     *     VpcId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
