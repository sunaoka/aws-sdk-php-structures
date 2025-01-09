<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogOptions $CloudWatchLogOptions
 */
class VpnTunnelLogOptions extends Shape
{
    /**
     * @param array{CloudWatchLogOptions?: CloudWatchLogOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
