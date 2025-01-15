<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateNotificationSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubscriptionId
 * @property string|null $EndPoint
 * @property 'HTTPS'|'SQS'|null $Protocol
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     SubscriptionId?: string|null,
     *     EndPoint?: string|null,
     *     Protocol?: 'HTTPS'|'SQS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
