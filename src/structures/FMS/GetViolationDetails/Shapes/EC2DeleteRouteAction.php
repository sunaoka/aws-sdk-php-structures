<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationPrefixListId
 * @property string|null $DestinationIpv6CidrBlock
 * @property ActionTarget $RouteTableId
 */
class EC2DeleteRouteAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DestinationCidrBlock?: string|null,
     *     DestinationPrefixListId?: string|null,
     *     DestinationIpv6CidrBlock?: string|null,
     *     RouteTableId: ActionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
