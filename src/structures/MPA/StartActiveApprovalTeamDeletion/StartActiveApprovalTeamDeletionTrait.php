<?php

namespace Sunaoka\Aws\Structures\MPA\StartActiveApprovalTeamDeletion;

trait StartActiveApprovalTeamDeletionTrait
{
    /**
     * @param StartActiveApprovalTeamDeletionRequest $args
     * @return StartActiveApprovalTeamDeletionResponse
     */
    public function startActiveApprovalTeamDeletion(StartActiveApprovalTeamDeletionRequest $args)
    {
        $result = parent::startActiveApprovalTeamDeletion($args->toArray());
        return new StartActiveApprovalTeamDeletionResponse($result->toArray());
    }
}
