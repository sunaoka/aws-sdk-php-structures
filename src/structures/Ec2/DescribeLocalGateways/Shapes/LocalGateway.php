<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalGatewayId
 * @property string $OutpostArn
 * @property string $OwnerId
 * @property string $State
 * @property list<Tag> $Tags
 */
class LocalGateway extends Shape
{
    /**
     * @param array{
     *     LocalGatewayId?: string,
     *     OutpostArn?: string,
     *     OwnerId?: string,
     *     State?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
