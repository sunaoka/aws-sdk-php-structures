<?php

namespace Sunaoka\Aws\Structures\MPA\ListApprovalTeams;

trait ListApprovalTeamsTrait
{
    /**
     * @param ListApprovalTeamsRequest $args
     * @return ListApprovalTeamsResponse
     */
    public function listApprovalTeams(ListApprovalTeamsRequest $args)
    {
        $result = parent::listApprovalTeams($args->toArray());
        return new ListApprovalTeamsResponse($result->toArray());
    }
}
