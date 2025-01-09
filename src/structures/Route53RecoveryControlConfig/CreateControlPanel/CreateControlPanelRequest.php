<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateControlPanel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $ClusterArn
 * @property string $ControlPanelName
 * @property array<string, string> $Tags
 */
class CreateControlPanelRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     ClusterArn: string,
     *     ControlPanelName: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
