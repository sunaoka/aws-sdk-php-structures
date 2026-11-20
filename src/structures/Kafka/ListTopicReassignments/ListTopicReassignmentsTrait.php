<?php

namespace Sunaoka\Aws\Structures\Kafka\ListTopicReassignments;

trait ListTopicReassignmentsTrait
{
    /**
     * @param ListTopicReassignmentsRequest $args
     * @return ListTopicReassignmentsResponse
     */
    public function listTopicReassignments(ListTopicReassignmentsRequest $args)
    {
        $result = parent::listTopicReassignments($args->toArray());
        return new ListTopicReassignmentsResponse($result->toArray());
    }
}
