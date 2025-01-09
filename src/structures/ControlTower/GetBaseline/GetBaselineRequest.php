<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $baselineIdentifier
 */
class GetBaselineRequest extends Request
{
    /**
     * @param array{baselineIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
