<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteBudget;

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
