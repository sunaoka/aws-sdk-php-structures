<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateControlPanel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ControlPanelArn
 * @property string $ControlPanelName
 */
class UpdateControlPanelRequest extends Request
{
    /**
     * @param array{
     *     ControlPanelArn: string,
     *     ControlPanelName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
