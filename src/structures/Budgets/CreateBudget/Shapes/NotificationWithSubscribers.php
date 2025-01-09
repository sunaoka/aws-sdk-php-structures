<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Notification $Notification
 * @property list<Subscriber> $Subscribers
 */
class NotificationWithSubscribers extends Shape
{
    /**
     * @param array{
     *     Notification: Notification,
     *     Subscribers: list<Subscriber>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
