<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRouteTableVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableVpcAssociationId
 * @property bool $DryRun
 */
class DeleteLocalGatewayRouteTableVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableVpcAssociationId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
