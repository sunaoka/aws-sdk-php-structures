<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $TopicName
 */
class DescribeTopicRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     TopicName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
