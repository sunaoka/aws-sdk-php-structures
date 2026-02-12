<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $TopicName
 * @property int<1, max> $PartitionCount
 * @property int<1, max> $ReplicationFactor
 * @property string|null $Configs
 */
class CreateTopicRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     TopicName: string,
     *     PartitionCount: int<1, max>,
     *     ReplicationFactor: int<1, max>,
     *     Configs?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
