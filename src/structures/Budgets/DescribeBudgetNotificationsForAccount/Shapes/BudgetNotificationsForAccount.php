<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetNotificationsForAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Notification> $Notifications
 * @property string $BudgetName
 */
class BudgetNotificationsForAccount extends Shape
{
    /**
     * @param array{
     *     Notifications?: list<Notification>,
     *     BudgetName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
