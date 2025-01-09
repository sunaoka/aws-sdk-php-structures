<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $enabledControlIdentifier
 */
class GetEnabledControlRequest extends Request
{
    /**
     * @param array{enabledControlIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
