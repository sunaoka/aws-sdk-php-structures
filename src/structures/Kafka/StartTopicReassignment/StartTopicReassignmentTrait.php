<?php

namespace Sunaoka\Aws\Structures\Kafka\StartTopicReassignment;

trait StartTopicReassignmentTrait
{
    /**
     * @param StartTopicReassignmentRequest $args
     * @return StartTopicReassignmentResponse
     */
    public function startTopicReassignment(StartTopicReassignmentRequest $args)
    {
        $result = parent::startTopicReassignment($args->toArray());
        return new StartTopicReassignmentResponse($result->toArray());
    }
}
