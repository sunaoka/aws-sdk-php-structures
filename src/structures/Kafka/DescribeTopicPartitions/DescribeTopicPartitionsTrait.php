<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeTopicPartitions;

trait DescribeTopicPartitionsTrait
{
    /**
     * @param DescribeTopicPartitionsRequest $args
     * @return DescribeTopicPartitionsResponse
     */
    public function describeTopicPartitions(DescribeTopicPartitionsRequest $args)
    {
        $result = parent::describeTopicPartitions($args->toArray());
        return new DescribeTopicPartitionsResponse($result->toArray());
    }
}
