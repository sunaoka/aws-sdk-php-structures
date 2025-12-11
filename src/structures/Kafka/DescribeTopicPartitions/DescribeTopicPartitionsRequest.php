<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeTopicPartitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $TopicName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeTopicPartitionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     TopicName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
