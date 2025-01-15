<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateRoutingControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ClusterArn
 * @property string|null $ControlPanelArn
 * @property string $RoutingControlName
 */
class CreateRoutingControlRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ClusterArn: string,
     *     ControlPanelArn?: string|null,
     *     RoutingControlName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
