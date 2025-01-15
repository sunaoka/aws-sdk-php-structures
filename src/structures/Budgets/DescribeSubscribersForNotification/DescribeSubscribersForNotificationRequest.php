<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeSubscribersForNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property Shapes\Notification $Notification
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeSubscribersForNotificationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     Notification: Shapes\Notification,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
