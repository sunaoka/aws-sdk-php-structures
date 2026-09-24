<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventBusArn
 */
class DescribeEventBusRequest extends Request
{
    /**
     * @param array{EventBusArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
