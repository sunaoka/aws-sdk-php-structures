<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIAMPolicyAssignments;

trait ListIAMPolicyAssignmentsTrait
{
    /**
     * @param ListIAMPolicyAssignmentsRequest $args
     * @return ListIAMPolicyAssignmentsResponse
     */
    public function listIAMPolicyAssignments(ListIAMPolicyAssignmentsRequest $args)
    {
        $result = parent::listIAMPolicyAssignments($args->toArray());
        return new ListIAMPolicyAssignmentsResponse($result->toArray());
    }
}
