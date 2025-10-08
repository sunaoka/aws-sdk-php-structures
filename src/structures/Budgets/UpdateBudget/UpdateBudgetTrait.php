<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudget;

trait UpdateBudgetTrait
{
    /**
     * @param UpdateBudgetRequest $args
     * @return UpdateBudgetResponse
     */
    public function updateBudget(UpdateBudgetRequest $args)
    {
        $result = parent::updateBudget($args->toArray());
        return new UpdateBudgetResponse($result->toArray());
    }
}
