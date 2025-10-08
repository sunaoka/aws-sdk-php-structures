<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIAMPolicyAssignmentsForUser;

trait ListIAMPolicyAssignmentsForUserTrait
{
    /**
     * @param ListIAMPolicyAssignmentsForUserRequest $args
     * @return ListIAMPolicyAssignmentsForUserResponse
     */
    public function listIAMPolicyAssignmentsForUser(ListIAMPolicyAssignmentsForUserRequest $args)
    {
        $result = parent::listIAMPolicyAssignmentsForUser($args->toArray());
        return new ListIAMPolicyAssignmentsForUserResponse($result->toArray());
    }
}
