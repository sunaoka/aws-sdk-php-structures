<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateFolderMembership;

trait CreateFolderMembershipTrait
{
    /**
     * @param CreateFolderMembershipRequest $args
     * @return CreateFolderMembershipResponse
     */
    public function createFolderMembership(CreateFolderMembershipRequest $args)
    {
        $result = parent::createFolderMembership($args->toArray());
        return new CreateFolderMembershipResponse($result->toArray());
    }
}
