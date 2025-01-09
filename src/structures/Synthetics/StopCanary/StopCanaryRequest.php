<?php

namespace Sunaoka\Aws\Structures\Synthetics\StopCanary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StopCanaryRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
