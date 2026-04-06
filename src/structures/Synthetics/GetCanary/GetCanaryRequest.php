<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetCanaryRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
