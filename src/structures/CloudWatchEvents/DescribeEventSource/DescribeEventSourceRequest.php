<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeEventSourceRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
