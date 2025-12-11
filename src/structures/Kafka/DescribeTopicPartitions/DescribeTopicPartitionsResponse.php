<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeTopicPartitions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TopicPartitionInfo>|null $Partitions
 * @property string|null $NextToken
 */
class DescribeTopicPartitionsResponse extends Response
{
}
