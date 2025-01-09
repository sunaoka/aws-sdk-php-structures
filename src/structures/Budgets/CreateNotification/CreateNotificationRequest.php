<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property Shapes\Notification $Notification
 * @property list<Shapes\Subscriber> $Subscribers
 */
class CreateNotificationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     Notification: Shapes\Notification,
     *     Subscribers: list<Shapes\Subscriber>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
