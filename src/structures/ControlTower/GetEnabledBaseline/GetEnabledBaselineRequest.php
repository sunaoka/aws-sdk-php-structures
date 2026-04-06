<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $enabledBaselineIdentifier
 */
class GetEnabledBaselineRequest extends Request
{
    /**
     * @param array{enabledBaselineIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
