<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property string|null $Ipv4
 * @property string|null $Ipv6
 */
class SubnetConfiguration extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     Ipv4?: string|null,
     *     Ipv6?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
