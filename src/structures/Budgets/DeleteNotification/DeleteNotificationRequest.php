<?php

namespace Sunaoka\Aws\Structures\Budgets\DeleteNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property Shapes\Notification $Notification
 */
class DeleteNotificationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     Notification: Shapes\Notification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
