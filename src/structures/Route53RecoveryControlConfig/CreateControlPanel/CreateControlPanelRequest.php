<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateControlPanel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ClusterArn
 * @property string $ControlPanelName
 * @property array<string, string>|null $Tags
 */
class CreateControlPanelRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ClusterArn: string,
     *     ControlPanelName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
