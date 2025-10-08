<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteProjectMembership;

trait DeleteProjectMembershipTrait
{
    /**
     * @param DeleteProjectMembershipRequest $args
     * @return DeleteProjectMembershipResponse
     */
    public function deleteProjectMembership(DeleteProjectMembershipRequest $args)
    {
        $result = parent::deleteProjectMembership($args->toArray());
        return new DeleteProjectMembershipResponse($result->toArray());
    }
}
