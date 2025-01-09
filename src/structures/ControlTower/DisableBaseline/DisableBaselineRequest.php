<?php

namespace Sunaoka\Aws\Structures\ControlTower\DisableBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $enabledBaselineIdentifier
 */
class DisableBaselineRequest extends Request
{
    /**
     * @param array{enabledBaselineIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
