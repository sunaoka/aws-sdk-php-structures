<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudgetAction;

trait UpdateBudgetActionTrait
{
    /**
     * @param UpdateBudgetActionRequest $args
     * @return UpdateBudgetActionResponse
     */
    public function updateBudgetAction(UpdateBudgetActionRequest $args)
    {
        $result = parent::updateBudgetAction($args->toArray());
        return new UpdateBudgetActionResponse($result->toArray());
    }
}
