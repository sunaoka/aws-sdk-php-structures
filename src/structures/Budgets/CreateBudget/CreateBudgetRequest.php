<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property Shapes\Budget $Budget
 * @property list<Shapes\NotificationWithSubscribers>|null $NotificationsWithSubscribers
 */
class CreateBudgetRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Budget: Shapes\Budget,
     *     NotificationsWithSubscribers?: list<Shapes\NotificationWithSubscribers>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
