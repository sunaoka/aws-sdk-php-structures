<?php

namespace Sunaoka\Aws\Structures\Synthetics\StartCanary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StartCanaryRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
