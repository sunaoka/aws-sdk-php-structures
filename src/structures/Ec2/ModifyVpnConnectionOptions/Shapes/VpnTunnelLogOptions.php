<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnectionOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogOptions|null $CloudWatchLogOptions
 */
class VpnTunnelLogOptions extends Shape
{
    /**
     * @param array{CloudWatchLogOptions?: CloudWatchLogOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
