<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriberArn
 */
class DescribeSubscriberRequest extends Request
{
    /**
     * @param array{SubscriberArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
