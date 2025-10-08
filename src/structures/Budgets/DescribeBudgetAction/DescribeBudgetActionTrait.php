<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetAction;

trait DescribeBudgetActionTrait
{
    /**
     * @param DescribeBudgetActionRequest $args
     * @return DescribeBudgetActionResponse
     */
    public function describeBudgetAction(DescribeBudgetActionRequest $args)
    {
        $result = parent::describeBudgetAction($args->toArray());
        return new DescribeBudgetActionResponse($result->toArray());
    }
}
