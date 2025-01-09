<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetMetricStreamRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
