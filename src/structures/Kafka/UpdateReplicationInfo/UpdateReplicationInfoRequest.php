<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateReplicationInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConsumerGroupReplicationUpdate $ConsumerGroupReplication
 * @property string $CurrentVersion
 * @property string $ReplicatorArn
 * @property string $SourceKafkaClusterArn
 * @property string $TargetKafkaClusterArn
 * @property Shapes\TopicReplicationUpdate $TopicReplication
 */
class UpdateReplicationInfoRequest extends Request
{
    /**
     * @param array{
     *     ConsumerGroupReplication?: Shapes\ConsumerGroupReplicationUpdate,
     *     CurrentVersion: string,
     *     ReplicatorArn: string,
     *     SourceKafkaClusterArn: string,
     *     TargetKafkaClusterArn: string,
     *     TopicReplication?: Shapes\TopicReplicationUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
