<?php

namespace Sunaoka\Aws\Structures\Budgets\ExecuteBudgetAction;

trait ExecuteBudgetActionTrait
{
    /**
     * @param ExecuteBudgetActionRequest $args
     * @return ExecuteBudgetActionResponse
     */
    public function executeBudgetAction(ExecuteBudgetActionRequest $args)
    {
        $result = parent::executeBudgetAction($args->toArray());
        return new ExecuteBudgetActionResponse($result->toArray());
    }
}
