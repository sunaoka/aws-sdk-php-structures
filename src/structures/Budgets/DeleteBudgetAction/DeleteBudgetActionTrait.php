<?php

namespace Sunaoka\Aws\Structures\Budgets\DeleteBudgetAction;

trait DeleteBudgetActionTrait
{
    /**
     * @param DeleteBudgetActionRequest $args
     * @return DeleteBudgetActionResponse
     */
    public function deleteBudgetAction(DeleteBudgetActionRequest $args)
    {
        $result = parent::deleteBudgetAction($args->toArray());
        return new DeleteBudgetActionResponse($result->toArray());
    }
}
