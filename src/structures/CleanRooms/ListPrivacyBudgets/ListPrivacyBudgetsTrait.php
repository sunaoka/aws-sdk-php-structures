<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgets;

trait ListPrivacyBudgetsTrait
{
    /**
     * @param ListPrivacyBudgetsRequest $args
     * @return ListPrivacyBudgetsResponse
     */
    public function listPrivacyBudgets(ListPrivacyBudgetsRequest $args)
    {
        $result = parent::listPrivacyBudgets($args->toArray());
        return new ListPrivacyBudgetsResponse($result->toArray());
    }
}
