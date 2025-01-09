<?php

namespace Sunaoka\Aws\Structures\ControlTower\DisableControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlIdentifier
 * @property string $targetIdentifier
 */
class DisableControlRequest extends Request
{
    /**
     * @param array{
     *     controlIdentifier: string,
     *     targetIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
