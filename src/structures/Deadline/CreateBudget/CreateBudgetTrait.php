<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateBudget;

trait CreateBudgetTrait
{
    /**
     * @param CreateBudgetRequest $args
     * @return CreateBudgetResponse
     */
    public function createBudget(CreateBudgetRequest $args)
    {
        $result = parent::createBudget($args->toArray());
        return new CreateBudgetResponse($result->toArray());
    }
}
