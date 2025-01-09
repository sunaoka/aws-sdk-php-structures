<?php

namespace Sunaoka\Aws\Structures\ControlTower\ResetEnabledControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $enabledControlIdentifier
 */
class ResetEnabledControlRequest extends Request
{
    /**
     * @param array{enabledControlIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
