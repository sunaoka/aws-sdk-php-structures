<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DeleteControlPanel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ControlPanelArn
 */
class DeleteControlPanelRequest extends Request
{
    /**
     * @param array{ControlPanelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
