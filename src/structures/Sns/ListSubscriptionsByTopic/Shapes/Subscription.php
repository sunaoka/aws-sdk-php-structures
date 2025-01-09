<?php

namespace Sunaoka\Aws\Structures\Sns\ListSubscriptionsByTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubscriptionArn
 * @property string $Owner
 * @property string $Protocol
 * @property string $Endpoint
 * @property string $TopicArn
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     SubscriptionArn?: string,
     *     Owner?: string,
     *     Protocol?: string,
     *     Endpoint?: string,
     *     TopicArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
