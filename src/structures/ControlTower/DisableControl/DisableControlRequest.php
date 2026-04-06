<?php

namespace Sunaoka\Aws\Structures\ControlTower\DisableControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $controlIdentifier
 * @property string|null $targetIdentifier
 * @property string|null $enabledControlIdentifier
 */
class DisableControlRequest extends Request
{
    /**
     * @param array{
     *     controlIdentifier?: string|null,
     *     targetIdentifier?: string|null,
     *     enabledControlIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
