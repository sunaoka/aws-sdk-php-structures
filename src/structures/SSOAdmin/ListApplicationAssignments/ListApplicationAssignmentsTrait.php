<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignments;

trait ListApplicationAssignmentsTrait
{
    /**
     * @param ListApplicationAssignmentsRequest $args
     * @return ListApplicationAssignmentsResponse
     */
    public function listApplicationAssignments(ListApplicationAssignmentsRequest $args)
    {
        $result = parent::listApplicationAssignments($args->toArray());
        return new ListApplicationAssignmentsResponse($result->toArray());
    }
}
