<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignments;

trait ListAccountAssignmentsTrait
{
    /**
     * @param ListAccountAssignmentsRequest $args
     * @return ListAccountAssignmentsResponse
     */
    public function listAccountAssignments(ListAccountAssignmentsRequest $args)
    {
        $result = parent::listAccountAssignments($args->toArray());
        return new ListAccountAssignmentsResponse($result->toArray());
    }
}
