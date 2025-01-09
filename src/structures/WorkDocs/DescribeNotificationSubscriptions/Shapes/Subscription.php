<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeNotificationSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubscriptionId
 * @property string $EndPoint
 * @property 'HTTPS'|'SQS' $Protocol
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     SubscriptionId?: string,
     *     EndPoint?: string,
     *     Protocol?: 'HTTPS'|'SQS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
