<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeControlPanel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ControlPanelArn
 */
class DescribeControlPanelRequest extends Request
{
    /**
     * @param array{ControlPanelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
