<?php

namespace Sunaoka\Aws\Structures\MPA\GetApprovalTeam;

trait GetApprovalTeamTrait
{
    /**
     * @param GetApprovalTeamRequest $args
     * @return GetApprovalTeamResponse
     */
    public function getApprovalTeam(GetApprovalTeamRequest $args)
    {
        $result = parent::getApprovalTeam($args->toArray());
        return new GetApprovalTeamResponse($result->toArray());
    }
}
