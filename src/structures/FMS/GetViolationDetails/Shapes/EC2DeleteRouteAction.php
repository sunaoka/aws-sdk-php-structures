<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $DestinationCidrBlock
 * @property string $DestinationPrefixListId
 * @property string $DestinationIpv6CidrBlock
 * @property ActionTarget $RouteTableId
 */
class EC2DeleteRouteAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     DestinationCidrBlock?: string,
     *     DestinationPrefixListId?: string,
     *     DestinationIpv6CidrBlock?: string,
     *     RouteTableId: ActionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
