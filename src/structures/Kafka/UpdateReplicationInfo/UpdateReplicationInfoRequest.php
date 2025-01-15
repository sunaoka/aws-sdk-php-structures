<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateReplicationInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConsumerGroupReplicationUpdate|null $ConsumerGroupReplication
 * @property string $CurrentVersion
 * @property string $ReplicatorArn
 * @property string $SourceKafkaClusterArn
 * @property string $TargetKafkaClusterArn
 * @property Shapes\TopicReplicationUpdate|null $TopicReplication
 */
class UpdateReplicationInfoRequest extends Request
{
    /**
     * @param array{
     *     ConsumerGroupReplication?: Shapes\ConsumerGroupReplicationUpdate|null,
     *     CurrentVersion: string,
     *     ReplicatorArn: string,
     *     SourceKafkaClusterArn: string,
     *     TargetKafkaClusterArn: string,
     *     TopicReplication?: Shapes\TopicReplicationUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
