<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetNotificationsForAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Notification>|null $Notifications
 * @property string|null $BudgetName
 */
class BudgetNotificationsForAccount extends Shape
{
    /**
     * @param array{
     *     Notifications?: list<Notification>|null,
     *     BudgetName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
