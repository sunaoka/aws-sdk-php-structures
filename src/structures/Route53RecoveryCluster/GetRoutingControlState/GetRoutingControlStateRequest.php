<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\GetRoutingControlState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoutingControlArn
 */
class GetRoutingControlStateRequest extends Request
{
    /**
     * @param array{RoutingControlArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
