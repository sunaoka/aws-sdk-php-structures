<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 */
class DescribeEventBusRequest extends Request
{
    /**
     * @param array{Name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
