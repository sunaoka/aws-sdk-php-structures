<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv6Prefix
 */
class Ipv6PrefixSpecification extends Shape
{
    /**
     * @param array{Ipv6Prefix?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
