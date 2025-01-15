<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayId
 * @property 'direct-vpc-routing'|'coip'|null $Mode
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateLocalGatewayRouteTableRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayId: string,
     *     Mode?: 'direct-vpc-routing'|'coip'|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
