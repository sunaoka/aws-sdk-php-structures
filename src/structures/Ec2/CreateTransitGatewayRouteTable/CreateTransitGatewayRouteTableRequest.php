<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateTransitGatewayRouteTableRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
