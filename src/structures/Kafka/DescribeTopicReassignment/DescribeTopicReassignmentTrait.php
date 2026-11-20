<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeTopicReassignment;

trait DescribeTopicReassignmentTrait
{
    /**
     * @param DescribeTopicReassignmentRequest $args
     * @return DescribeTopicReassignmentResponse
     */
    public function describeTopicReassignment(DescribeTopicReassignmentRequest $args)
    {
        $result = parent::describeTopicReassignment($args->toArray());
        return new DescribeTopicReassignmentResponse($result->toArray());
    }
}
