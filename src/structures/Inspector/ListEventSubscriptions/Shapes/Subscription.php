<?php

namespace Sunaoka\Aws\Structures\Inspector\ListEventSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property string $topicArn
 * @property list<EventSubscription> $eventSubscriptions
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     resourceArn: string,
     *     topicArn: string,
     *     eventSubscriptions: list<EventSubscription>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
