<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $InstanceType
 * @property string $OwnerId
 */
class HostInstance extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     InstanceType?: string,
     *     OwnerId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
