<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogOptionsSpecification|null $CloudWatchLogOptions
 */
class VpnTunnelLogOptionsSpecification extends Shape
{
    /**
     * @param array{CloudWatchLogOptions?: CloudWatchLogOptionsSpecification|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
