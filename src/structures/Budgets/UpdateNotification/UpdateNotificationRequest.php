<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property Shapes\Notification $OldNotification
 * @property Shapes\Notification $NewNotification
 */
class UpdateNotificationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     OldNotification: Shapes\Notification,
     *     NewNotification: Shapes\Notification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
