<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCoipPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolId
 * @property list<string> $PoolCidrs
 * @property string $LocalGatewayRouteTableId
 * @property list<Tag> $Tags
 * @property string $PoolArn
 */
class CoipPool extends Shape
{
    /**
     * @param array{
     *     PoolId?: string,
     *     PoolCidrs?: list<string>,
     *     LocalGatewayRouteTableId?: string,
     *     Tags?: list<Tag>,
     *     PoolArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
