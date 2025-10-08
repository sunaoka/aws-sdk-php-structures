<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgets;

trait ListCollaborationPrivacyBudgetsTrait
{
    /**
     * @param ListCollaborationPrivacyBudgetsRequest $args
     * @return ListCollaborationPrivacyBudgetsResponse
     */
    public function listCollaborationPrivacyBudgets(ListCollaborationPrivacyBudgetsRequest $args)
    {
        $result = parent::listCollaborationPrivacyBudgets($args->toArray());
        return new ListCollaborationPrivacyBudgetsResponse($result->toArray());
    }
}
