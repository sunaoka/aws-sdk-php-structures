<?php

namespace Sunaoka\Aws\Structures\Budgets\DeleteBudget;

trait DeleteBudgetTrait
{
    /**
     * @param DeleteBudgetRequest $args
     * @return DeleteBudgetResponse
     */
    public function deleteBudget(DeleteBudgetRequest $args)
    {
        $result = parent::deleteBudget($args->toArray());
        return new DeleteBudgetResponse($result->toArray());
    }
}
