<?php

namespace Sunaoka\Aws\Structures\Kafka\StopTopicReassignment;

trait StopTopicReassignmentTrait
{
    /**
     * @param StopTopicReassignmentRequest $args
     * @return StopTopicReassignmentResponse
     */
    public function stopTopicReassignment(StopTopicReassignmentRequest $args)
    {
        $result = parent::stopTopicReassignment($args->toArray());
        return new StopTopicReassignmentResponse($result->toArray());
    }
}
