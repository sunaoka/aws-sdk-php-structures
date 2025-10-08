<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateBudgetAction;

trait CreateBudgetActionTrait
{
    /**
     * @param CreateBudgetActionRequest $args
     * @return CreateBudgetActionResponse
     */
    public function createBudgetAction(CreateBudgetActionRequest $args)
    {
        $result = parent::createBudgetAction($args->toArray());
        return new CreateBudgetActionResponse($result->toArray());
    }
}
