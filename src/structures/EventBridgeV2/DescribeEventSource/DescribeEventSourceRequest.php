<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceArn
 */
class DescribeEventSourceRequest extends Request
{
    /**
     * @param array{EventSourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
