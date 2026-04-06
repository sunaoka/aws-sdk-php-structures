<?php

namespace Sunaoka\Aws\Structures\MPA\DeleteInactiveApprovalTeamVersion;

trait DeleteInactiveApprovalTeamVersionTrait
{
    /**
     * @param DeleteInactiveApprovalTeamVersionRequest $args
     * @return DeleteInactiveApprovalTeamVersionResponse
     */
    public function deleteInactiveApprovalTeamVersion(DeleteInactiveApprovalTeamVersionRequest $args)
    {
        $result = parent::deleteInactiveApprovalTeamVersion($args->toArray());
        return new DeleteInactiveApprovalTeamVersionResponse($result->toArray());
    }
}
