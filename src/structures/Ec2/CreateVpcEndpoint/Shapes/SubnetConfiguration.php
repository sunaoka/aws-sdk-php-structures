<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property string $Ipv4
 * @property string $Ipv6
 */
class SubnetConfiguration extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string,
     *     Ipv4?: string,
     *     Ipv6?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
