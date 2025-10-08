<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeNotificationsForBudget;

trait DescribeNotificationsForBudgetTrait
{
    /**
     * @param DescribeNotificationsForBudgetRequest $args
     * @return DescribeNotificationsForBudgetResponse
     */
    public function describeNotificationsForBudget(DescribeNotificationsForBudgetRequest $args)
    {
        $result = parent::describeNotificationsForBudget($args->toArray());
        return new DescribeNotificationsForBudgetResponse($result->toArray());
    }
}
