<?php

namespace Sunaoka\Aws\Structures\ControlTower\ResetEnabledBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $enabledBaselineIdentifier
 */
class ResetEnabledBaselineRequest extends Request
{
    /**
     * @param array{enabledBaselineIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
