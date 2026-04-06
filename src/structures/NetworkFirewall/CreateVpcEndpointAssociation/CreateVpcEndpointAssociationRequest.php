<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateVpcEndpointAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallArn
 * @property string $VpcId
 * @property Shapes\SubnetMapping $SubnetMapping
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateVpcEndpointAssociationRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn: string,
     *     VpcId: string,
     *     SubnetMapping: Shapes\SubnetMapping,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
