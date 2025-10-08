<?php

namespace Sunaoka\Aws\Structures\Deadline\GetBudget;

trait GetBudgetTrait
{
    /**
     * @param GetBudgetRequest $args
     * @return GetBudgetResponse
     */
    public function getBudget(GetBudgetRequest $args)
    {
        $result = parent::getBudget($args->toArray());
        return new GetBudgetResponse($result->toArray());
    }
}
