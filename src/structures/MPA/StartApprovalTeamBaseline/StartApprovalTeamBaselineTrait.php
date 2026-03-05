<?php

namespace Sunaoka\Aws\Structures\MPA\StartApprovalTeamBaseline;

trait StartApprovalTeamBaselineTrait
{
    /**
     * @param StartApprovalTeamBaselineRequest $args
     * @return StartApprovalTeamBaselineResponse
     */
    public function startApprovalTeamBaseline(StartApprovalTeamBaselineRequest $args)
    {
        $result = parent::startApprovalTeamBaseline($args->toArray());
        return new StartApprovalTeamBaselineResponse($result->toArray());
    }
}
