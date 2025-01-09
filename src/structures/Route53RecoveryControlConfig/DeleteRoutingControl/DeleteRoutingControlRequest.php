<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DeleteRoutingControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoutingControlArn
 */
class DeleteRoutingControlRequest extends Request
{
    /**
     * @param array{RoutingControlArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
