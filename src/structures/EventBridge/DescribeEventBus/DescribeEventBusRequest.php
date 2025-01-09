<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeEventBusRequest extends Request
{
    /**
     * @param array{Name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
