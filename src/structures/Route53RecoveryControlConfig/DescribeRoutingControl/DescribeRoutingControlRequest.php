<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeRoutingControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoutingControlArn
 */
class DescribeRoutingControlRequest extends Request
{
    /**
     * @param array{RoutingControlArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
