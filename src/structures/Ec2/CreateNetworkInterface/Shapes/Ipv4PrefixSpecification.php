<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv4Prefix
 */
class Ipv4PrefixSpecification extends Shape
{
    /**
     * @param array{Ipv4Prefix?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
