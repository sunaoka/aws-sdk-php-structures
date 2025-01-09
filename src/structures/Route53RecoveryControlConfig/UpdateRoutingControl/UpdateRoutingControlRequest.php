<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateRoutingControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoutingControlArn
 * @property string $RoutingControlName
 */
class UpdateRoutingControlRequest extends Request
{
    /**
     * @param array{
     *     RoutingControlArn: string,
     *     RoutingControlName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
