<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTableVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableId
 * @property string $VpcId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateLocalGatewayRouteTableVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId: string,
     *     VpcId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
