<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets;

trait ListBudgetsTrait
{
    /**
     * @param ListBudgetsRequest $args
     * @return ListBudgetsResponse
     */
    public function listBudgets(ListBudgetsRequest $args)
    {
        $result = parent::listBudgets($args->toArray());
        return new ListBudgetsResponse($result->toArray());
    }
}
