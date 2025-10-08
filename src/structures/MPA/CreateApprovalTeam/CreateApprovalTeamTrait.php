<?php

namespace Sunaoka\Aws\Structures\MPA\CreateApprovalTeam;

trait CreateApprovalTeamTrait
{
    /**
     * @param CreateApprovalTeamRequest $args
     * @return CreateApprovalTeamResponse
     */
    public function createApprovalTeam(CreateApprovalTeamRequest $args)
    {
        $result = parent::createApprovalTeam($args->toArray());
        return new CreateApprovalTeamResponse($result->toArray());
    }
}
