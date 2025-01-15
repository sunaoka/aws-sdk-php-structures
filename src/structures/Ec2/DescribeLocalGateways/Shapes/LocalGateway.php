<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalGatewayId
 * @property string|null $OutpostArn
 * @property string|null $OwnerId
 * @property string|null $State
 * @property list<Tag>|null $Tags
 */
class LocalGateway extends Shape
{
    /**
     * @param array{
     *     LocalGatewayId?: string|null,
     *     OutpostArn?: string|null,
     *     OwnerId?: string|null,
     *     State?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
