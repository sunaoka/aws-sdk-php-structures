<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DeleteSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriberArn
 */
class DeleteSubscriberRequest extends Request
{
    /**
     * @param array{SubscriberArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
