<?php

namespace Sunaoka\Aws\Structures\MPA\UpdateApprovalTeam;

trait UpdateApprovalTeamTrait
{
    /**
     * @param UpdateApprovalTeamRequest $args
     * @return UpdateApprovalTeamResponse
     */
    public function updateApprovalTeam(UpdateApprovalTeamRequest $args)
    {
        $result = parent::updateApprovalTeam($args->toArray());
        return new UpdateApprovalTeamResponse($result->toArray());
    }
}
