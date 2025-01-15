<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCoipPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PoolId
 * @property list<string>|null $PoolCidrs
 * @property string|null $LocalGatewayRouteTableId
 * @property list<Tag>|null $Tags
 * @property string|null $PoolArn
 */
class CoipPool extends Shape
{
    /**
     * @param array{
     *     PoolId?: string|null,
     *     PoolCidrs?: list<string>|null,
     *     LocalGatewayRouteTableId?: string|null,
     *     Tags?: list<Tag>|null,
     *     PoolArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
