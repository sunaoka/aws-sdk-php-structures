<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateRoutingControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $ClusterArn
 * @property string $ControlPanelArn
 * @property string $RoutingControlName
 */
class CreateRoutingControlRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     ClusterArn: string,
     *     ControlPanelArn?: string,
     *     RoutingControlName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
