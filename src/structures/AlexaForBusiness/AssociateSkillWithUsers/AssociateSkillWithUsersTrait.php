<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateSkillWithUsers;

trait AssociateSkillWithUsersTrait
{
    /**
     * @param AssociateSkillWithUsersRequest $args
     * @return AssociateSkillWithUsersResponse
     */
    public function associateSkillWithUsers(AssociateSkillWithUsersRequest $args)
    {
        $result = parent::associateSkillWithUsers($args->toArray());
        return new AssociateSkillWithUsersResponse($result->toArray());
    }
}
