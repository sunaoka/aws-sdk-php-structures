<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayId
 * @property 'direct-vpc-routing'|'coip' $Mode
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateLocalGatewayRouteTableRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayId: string,
     *     Mode?: 'direct-vpc-routing'|'coip',
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
