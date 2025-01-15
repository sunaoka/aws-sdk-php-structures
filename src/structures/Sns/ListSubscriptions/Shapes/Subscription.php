<?php

namespace Sunaoka\Aws\Structures\Sns\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubscriptionArn
 * @property string|null $Owner
 * @property string|null $Protocol
 * @property string|null $Endpoint
 * @property string|null $TopicArn
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     SubscriptionArn?: string|null,
     *     Owner?: string|null,
     *     Protocol?: string|null,
     *     Endpoint?: string|null,
     *     TopicArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
