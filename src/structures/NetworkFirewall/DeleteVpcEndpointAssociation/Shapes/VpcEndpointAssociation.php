<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteVpcEndpointAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcEndpointAssociationId
 * @property string $VpcEndpointAssociationArn
 * @property string $FirewallArn
 * @property string $VpcId
 * @property SubnetMapping $SubnetMapping
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class VpcEndpointAssociation extends Shape
{
    /**
     * @param array{
     *     VpcEndpointAssociationId?: string|null,
     *     VpcEndpointAssociationArn: string,
     *     FirewallArn: string,
     *     VpcId: string,
     *     SubnetMapping: SubnetMapping,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
