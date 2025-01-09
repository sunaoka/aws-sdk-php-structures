<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property Shapes\Notification $Notification
 * @property Shapes\Subscriber $OldSubscriber
 * @property Shapes\Subscriber $NewSubscriber
 */
class UpdateSubscriberRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     Notification: Shapes\Notification,
     *     OldSubscriber: Shapes\Subscriber,
     *     NewSubscriber: Shapes\Subscriber
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
