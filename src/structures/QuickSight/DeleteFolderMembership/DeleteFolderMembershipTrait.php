<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteFolderMembership;

trait DeleteFolderMembershipTrait
{
    /**
     * @param DeleteFolderMembershipRequest $args
     * @return DeleteFolderMembershipResponse
     */
    public function deleteFolderMembership(DeleteFolderMembershipRequest $args)
    {
        $result = parent::deleteFolderMembership($args->toArray());
        return new DeleteFolderMembershipResponse($result->toArray());
    }
}
