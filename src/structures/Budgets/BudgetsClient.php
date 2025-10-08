<?php

namespace Sunaoka\Aws\Structures\Budgets;

class BudgetsClient extends \Aws\Budgets\BudgetsClient
{
    use CreateBudget\CreateBudgetTrait;
    use CreateBudgetAction\CreateBudgetActionTrait;
    use CreateNotification\CreateNotificationTrait;
    use CreateSubscriber\CreateSubscriberTrait;
    use DeleteBudget\DeleteBudgetTrait;
    use DeleteBudgetAction\DeleteBudgetActionTrait;
    use DeleteNotification\DeleteNotificationTrait;
    use DeleteSubscriber\DeleteSubscriberTrait;
    use DescribeBudget\DescribeBudgetTrait;
    use DescribeBudgetAction\DescribeBudgetActionTrait;
    use DescribeBudgetActionHistories\DescribeBudgetActionHistoriesTrait;
    use DescribeBudgetActionsForAccount\DescribeBudgetActionsForAccountTrait;
    use DescribeBudgetActionsForBudget\DescribeBudgetActionsForBudgetTrait;
    use DescribeBudgetNotificationsForAccount\DescribeBudgetNotificationsForAccountTrait;
    use DescribeBudgetPerformanceHistory\DescribeBudgetPerformanceHistoryTrait;
    use DescribeBudgets\DescribeBudgetsTrait;
    use DescribeNotificationsForBudget\DescribeNotificationsForBudgetTrait;
    use DescribeSubscribersForNotification\DescribeSubscribersForNotificationTrait;
    use ExecuteBudgetAction\ExecuteBudgetActionTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBudget\UpdateBudgetTrait;
    use UpdateBudgetAction\UpdateBudgetActionTrait;
    use UpdateNotification\UpdateNotificationTrait;
    use UpdateSubscriber\UpdateSubscriberTrait;
}
