<?php

namespace Sunaoka\Aws\Structures\Budgets\DeleteSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property Shapes\Notification $Notification
 * @property Shapes\Subscriber $Subscriber
 */
class DeleteSubscriberRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     Notification: Shapes\Notification,
     *     Subscriber: Shapes\Subscriber
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
